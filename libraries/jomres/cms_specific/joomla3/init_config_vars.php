
<
?
p
h
p

/
*
*

 
*
 
C
o
r
e
 
f
i
l
e
.

 
*

 
*
 
@
a
u
t
h
o
r
 
V
i
n
c
e
 
W
o
o
l
l
 
<
s
a
l
e
s
@
j
o
m
r
e
s
.
n
e
t
>

 
*

 
*
 
@
v
e
r
s
i
o
n
 
J
o
m
r
e
s
 
9
.
1
0
.
0
-
c
h
a
r
l
i
e

 
*

 
*
 
@
c
o
p
y
r
i
g
h
t
	
2
0
0
5
-
2
0
1
8
 
V
i
n
c
e
 
W
o
o
l
l

 
*
 
J
o
m
r
e
s
 
i
s
 
c
u
r
r
e
n
t
l
y
 
a
v
a
i
l
a
b
l
e
 
f
o
r
 
u
s
e
 
i
n
 
a
l
l
 
p
e
r
s
o
n
a
l
 
o
r
 
c
o
m
m
e
r
c
i
a
l
 
p
r
o
j
e
c
t
s
 
u
n
d
e
r
 
b
o
t
h
 
M
I
T
 
a
n
d
 
G
P
L
2
 
l
i
c
e
n
s
e
s
.
 
T
h
i
s
 
m
e
a
n
s
 
t
h
a
t
 
y
o
u
 
c
a
n
 
c
h
o
o
s
e
 
t
h
e
 
l
i
c
e
n
s
e
 
t
h
a
t
 
b
e
s
t
 
s
u
i
t
s
 
y
o
u
r
 
p
r
o
j
e
c
t
,
 
a
n
d
 
u
s
e
 
i
t
 
a
c
c
o
r
d
i
n
g
l
y

 
*
*
/


/
/
 
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#

d
e
f
i
n
e
d
(
'
_
J
O
M
R
E
S
_
I
N
I
T
C
H
E
C
K
'
)
 
o
r
 
d
i
e
(
'
D
i
r
e
c
t
 
A
c
c
e
s
s
 
t
o
 
t
h
i
s
 
f
i
l
e
 
i
s
 
n
o
t
 
a
l
l
o
w
e
d
.
'
)
;

/
/
 
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#


r
e
q
u
i
r
e
_
o
n
c
e
 
J
O
M
R
E
S
C
O
N
F
I
G
_
A
B
S
O
L
U
T
E
_
P
A
T
H
.
J
R
D
S
.
'
c
o
n
f
i
g
u
r
a
t
i
o
n
.
p
h
p
'
;

$
C
O
N
F
I
G
 
=
 
n
e
w
 
J
C
o
n
f
i
g
(
)
;


i
f
 
(
!
d
e
f
i
n
e
d
(
'
A
U
T
O
_
U
P
G
R
A
D
E
'
)
)
 
{

 
 
 
 
/
/
J
F
a
c
t
o
r
y
:
:
g
e
t
C
o
n
f
i
g
(
)
-
>
s
e
t
V
a
l
u
e
(
'
c
o
n
f
i
g
.
c
a
c
h
i
n
g
'
,
 
0
)
;

 
 
 
 
/
/
J
R
e
g
i
s
t
r
y
:
:
s
e
t
(
'
c
o
n
f
i
g
.
c
a
c
h
i
n
g
'
,
 
0
)
;

 
 
 
 
i
f
 
(
c
l
a
s
s
_
e
x
i
s
t
s
(
'
J
U
R
I
'
)
)
 
{

 
 
 
 
 
 
 
 
$
j
o
m
r
e
s
C
o
n
f
i
g
_
l
i
v
e
_
s
i
t
e
 
=
 
@
J
U
R
I
:
:
r
o
o
t
(
)
;

 
 
 
 
}
 
e
l
s
e
 
{

	
	
$
d
e
t
e
c
t
_
o
s
 
=
 
s
t
r
t
o
u
p
p
e
r
(
$
_
S
E
R
V
E
R
[
 
'
S
E
R
V
E
R
_
S
O
F
T
W
A
R
E
'
 
]
)
;
 
/
/
 
c
o
n
v
e
r
t
e
d
 
t
o
 
u
p
p
e
r
c
a
s
e

	
	
$
I
I
S
 
=
 
s
t
r
p
o
s
(
$
d
e
t
e
c
t
_
o
s
,
 
'
I
I
S
'
)
;

 
 
 
 
 
 
 
 
i
f
 
(
$
I
I
S
 
>
 
0
)
 
{
 
/
/
 
W
i
n
 
N
T
,
 
t
h
e
r
e
f
o
r
e
 
$
_
S
E
R
V
E
R
[
'
R
E
Q
U
E
S
T
_
U
R
I
'
]
 
=
=
 
n
u
l
l

 
 
 
 
 
 
 
 
 
 
 
 
$
p
a
t
h
_
i
n
f
o
 
=
 
$
_
S
E
R
V
E
R
[
 
'
P
A
T
H
_
I
N
F
O
'
 
]
;

 
 
 
 
 
 
 
 
 
 
 
 
$
_
U
R
I
 
=
 
e
x
p
l
o
d
e
(
'
/
'
,
 
$
p
a
t
h
_
i
n
f
o
)
;

 
 
 
 
 
 
 
 
}
 
e
l
s
e
 
{

 
 
 
 
 
 
 
 
 
 
 
 
l
i
s
t
(
$
p
a
t
h
,
 
$
a
r
g
s
)
 
=
 
e
x
p
l
o
d
e
(
'
?
'
,
 
$
_
S
E
R
V
E
R
[
 
'
R
E
Q
U
E
S
T
_
U
R
I
'
 
]
)
;

 
 
 
 
 
 
 
 
 
 
 
 
$
_
U
R
I
 
=
 
e
x
p
l
o
d
e
(
'
/
'
,
 
$
p
a
t
h
)
;

 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
a
r
r
a
y
_
s
h
i
f
t
(
$
_
U
R
I
)
;

 
 
 
 
 
 
 
 
$
_
U
R
I
 
=
 
a
r
r
a
y
_
s
l
i
c
e
(
$
_
U
R
I
,
 
0
,
 
c
o
u
n
t
(
$
_
U
R
I
)
 
-
 
1
)
;

 
 
 
 
 
 
 
 
a
r
r
a
y
_
u
n
s
h
i
f
t
(
$
_
U
R
I
,
 
$
_
S
E
R
V
E
R
[
 
'
S
E
R
V
E
R
_
N
A
M
E
'
 
]
)
;


 
 
 
 
 
 
 
 
$
j
o
m
r
e
s
C
o
n
f
i
g
_
l
i
v
e
_
s
i
t
e
 
=
 
'
h
t
t
p
:
/
/
'
.
i
m
p
l
o
d
e
(
'
/
'
,
 
$
_
U
R
I
)
;

 
 
 
 
}

}
 
e
l
s
e
 
{

	
$
d
e
t
e
c
t
_
o
s
 
=
 
s
t
r
t
o
u
p
p
e
r
(
$
_
S
E
R
V
E
R
[
 
'
S
E
R
V
E
R
_
S
O
F
T
W
A
R
E
'
 
]
)
;
 
/
/
 
c
o
n
v
e
r
t
e
d
 
t
o
 
u
p
p
e
r
c
a
s
e

	
$
I
I
S
 
=
 
s
t
r
p
o
s
(
$
d
e
t
e
c
t
_
o
s
,
 
'
I
I
S
'
)
;

 
 
 
 
i
f
 
(
$
I
I
S
 
>
 
0
)
 
{
 
/
/
 
W
i
n
 
N
T
,
 
t
h
e
r
e
f
o
r
e
 
$
_
S
E
R
V
E
R
[
'
R
E
Q
U
E
S
T
_
U
R
I
'
]
 
=
=
 
n
u
l
l

 
 
 
 
 
 
 
 
$
p
a
t
h
_
i
n
f
o
 
=
 
$
_
S
E
R
V
E
R
[
 
'
P
A
T
H
_
I
N
F
O
'
 
]
;

 
 
 
 
 
 
 
 
$
_
U
R
I
 
=
 
e
x
p
l
o
d
e
(
'
/
'
,
 
$
p
a
t
h
_
i
n
f
o
)
;

 
 
 
 
}
 
e
l
s
e
 
{

 
 
 
 
 
 
 
 
@
l
i
s
t
(
$
p
a
t
h
,
 
$
a
r
g
s
)
 
=
 
e
x
p
l
o
d
e
(
'
?
'
,
 
$
_
S
E
R
V
E
R
[
 
'
R
E
Q
U
E
S
T
_
U
R
I
'
 
]
)
;

 
 
 
 
 
 
 
 
$
_
U
R
I
 
=
 
e
x
p
l
o
d
e
(
'
/
'
,
 
$
p
a
t
h
)
;

 
 
 
 
}

 
 
 
 
a
r
r
a
y
_
s
h
i
f
t
(
$
_
U
R
I
)
;

 
 
 
 
$
_
U
R
I
 
=
 
a
r
r
a
y
_
s
l
i
c
e
(
$
_
U
R
I
,
 
0
,
 
c
o
u
n
t
(
$
_
U
R
I
)
 
-
 
1
)
;

 
 
 
 
a
r
r
a
y
_
u
n
s
h
i
f
t
(
$
_
U
R
I
,
 
$
_
S
E
R
V
E
R
[
 
'
S
E
R
V
E
R
_
N
A
M
E
'
 
]
)
;


 
 
 
 
$
j
o
m
r
e
s
C
o
n
f
i
g
_
l
i
v
e
_
s
i
t
e
 
=
 
'
h
t
t
p
:
/
/
'
.
i
m
p
l
o
d
e
(
'
/
'
,
 
$
_
U
R
I
)
;

}


i
f
 
(
(
i
s
s
e
t
(
$
_
S
E
R
V
E
R
[
'
H
T
T
P
S
'
]
)
 
&
&
 
$
_
S
E
R
V
E
R
[
'
H
T
T
P
S
'
]
 
!
=
=
 
'
o
f
f
'
)
 
|
|
 
$
_
S
E
R
V
E
R
[
'
S
E
R
V
E
R
_
P
O
R
T
'
]
 
=
=
 
4
4
3
)
 
{

 
 
 
 
$
j
o
m
r
e
s
C
o
n
f
i
g
_
l
i
v
e
_
s
i
t
e
 
=
 
s
t
r
_
r
e
p
l
a
c
e
(
'
h
t
t
p
:
/
/
'
,
 
'
h
t
t
p
s
:
/
/
'
,
 
$
j
o
m
r
e
s
C
o
n
f
i
g
_
l
i
v
e
_
s
i
t
e
)
;

}


$
j
o
m
r
e
s
C
o
n
f
i
g
_
l
i
v
e
_
s
i
t
e
 
=
 
s
t
r
_
r
e
p
l
a
c
e
(
'
/
a
d
m
i
n
i
s
t
r
a
t
o
r
/
'
,
 
'
'
,
 
$
j
o
m
r
e
s
C
o
n
f
i
g
_
l
i
v
e
_
s
i
t
e
)
;

$
j
o
m
r
e
s
C
o
n
f
i
g
_
l
i
v
e
_
s
i
t
e
 
=
 
s
t
r
_
r
e
p
l
a
c
e
(
'
/
a
d
m
i
n
i
s
t
r
a
t
o
r
'
,
 
'
'
,
 
$
j
o
m
r
e
s
C
o
n
f
i
g
_
l
i
v
e
_
s
i
t
e
)
;

i
f
 
(
s
u
b
s
t
r
(
$
j
o
m
r
e
s
C
o
n
f
i
g
_
l
i
v
e
_
s
i
t
e
,
 
-
1
)
 
=
=
 
'
/
'
)
 
{

 
 
 
 
$
j
o
m
r
e
s
C
o
n
f
i
g
_
l
i
v
e
_
s
i
t
e
 
=
 
s
u
b
s
t
r
(
$
j
o
m
r
e
s
C
o
n
f
i
g
_
l
i
v
e
_
s
i
t
e
,
 
0
,
 
-
1
)
;

}


i
f
 
(
d
e
f
i
n
e
d
(
'
A
P
I
_
S
T
A
R
T
E
D
'
)
)
 
{

 
 
 
 
$
j
o
m
r
e
s
C
o
n
f
i
g
_
l
i
v
e
_
s
i
t
e
 
=
 
s
t
r
_
r
e
p
l
a
c
e
(
'
/
j
o
m
r
e
s
/
a
p
i
'
,
 
'
'
,
 
$
j
o
m
r
e
s
C
o
n
f
i
g
_
l
i
v
e
_
s
i
t
e
)
;

}


$
j
o
m
r
e
s
C
o
n
f
i
g
_
l
a
n
g
 
=
 
'
e
n
-
G
B
'
;

$
j
o
m
r
e
s
C
o
n
f
i
g
_
l
a
n
g
_
s
h
o
r
t
c
o
d
e
 
=
 
'
e
n
'
;

i
f
 
(
!
d
e
f
i
n
e
d
(
'
A
U
T
O
_
U
P
G
R
A
D
E
'
)
)
 
{

 
 
 
 
$
j
o
m
r
e
s
C
o
n
f
i
g
_
l
a
n
g
 
=
 
J
F
a
c
t
o
r
y
:
:
g
e
t
L
a
n
g
u
a
g
e
(
)
-
>
g
e
t
T
a
g
(
)
;

	

	
/
/
g
e
t
 
l
a
n
g
 
s
h
o
r
t
 
c
o
d
e

	
$
l
a
n
g
u
a
g
e
s
 
=
 
J
L
a
n
g
u
a
g
e
H
e
l
p
e
r
:
:
g
e
t
L
a
n
g
u
a
g
e
s
(
'
l
a
n
g
_
c
o
d
e
'
)
;

	

	
i
f
 
(
i
s
s
e
t
(
$
l
a
n
g
u
a
g
e
s
[
$
j
o
m
r
e
s
C
o
n
f
i
g
_
l
a
n
g
]
)
)
 
{

	
	
$
j
o
m
r
e
s
C
o
n
f
i
g
_
l
a
n
g
_
s
h
o
r
t
c
o
d
e
 
=
 
$
l
a
n
g
u
a
g
e
s
[
$
j
o
m
r
e
s
C
o
n
f
i
g
_
l
a
n
g
]
-
>
s
e
f
;

	
}

}


$
s
h
o
w
t
i
m
e
 
=
 
j
o
m
r
e
s
_
s
i
n
g
l
e
t
o
n
_
a
b
s
t
r
a
c
t
:
:
g
e
t
I
n
s
t
a
n
c
e
(
'
s
h
o
w
t
i
m
e
'
)
;


$
s
h
o
w
t
i
m
e
-
>
e
r
r
o
r
_
r
e
p
o
r
t
i
n
g
 
=
 
$
C
O
N
F
I
G
-
>
e
r
r
o
r
_
r
e
p
o
r
t
i
n
g
;

$
s
h
o
w
t
i
m
e
-
>
d
b
t
y
p
e
 
=
 
$
C
O
N
F
I
G
-
>
d
b
t
y
p
e
;

$
s
h
o
w
t
i
m
e
-
>
l
a
n
g
 
=
 
$
j
o
m
r
e
s
C
o
n
f
i
g
_
l
a
n
g
;

$
s
h
o
w
t
i
m
e
-
>
l
a
n
g
_
s
h
o
r
t
c
o
d
e
 
=
 
$
j
o
m
r
e
s
C
o
n
f
i
g
_
l
a
n
g
_
s
h
o
r
t
c
o
d
e
;

$
s
h
o
w
t
i
m
e
-
>
l
i
v
e
_
s
i
t
e
 
=
 
$
j
o
m
r
e
s
C
o
n
f
i
g
_
l
i
v
e
_
s
i
t
e
;

$
s
h
o
w
t
i
m
e
-
>
o
f
f
l
i
n
e
 
=
 
$
C
O
N
F
I
G
-
>
o
f
f
l
i
n
e
;

$
s
h
o
w
t
i
m
e
-
>
d
b
 
=
 
$
C
O
N
F
I
G
-
>
d
b
;

$
s
h
o
w
t
i
m
e
-
>
s
i
t
e
n
a
m
e
 
=
 
$
C
O
N
F
I
G
-
>
s
i
t
e
n
a
m
e
;

$
s
h
o
w
t
i
m
e
-
>
l
i
f
e
t
i
m
e
 
=
 
$
C
O
N
F
I
G
-
>
l
i
f
e
t
i
m
e
;

$
s
h
o
w
t
i
m
e
-
>
M
e
t
a
D
e
s
c
 
=
 
$
C
O
N
F
I
G
-
>
M
e
t
a
D
e
s
c
;

$
s
h
o
w
t
i
m
e
-
>
M
e
t
a
K
e
y
s
 
=
 
$
C
O
N
F
I
G
-
>
M
e
t
a
K
e
y
s
;

/
/
$
s
h
o
w
t
i
m
e
-
>
M
e
t
a
T
i
t
l
e
	
	
=
 
$
C
O
N
F
I
G
-
>
M
e
t
a
T
i
t
l
e
;

$
s
h
o
w
t
i
m
e
-
>
M
e
t
a
A
u
t
h
o
r
 
=
 
$
C
O
N
F
I
G
-
>
M
e
t
a
A
u
t
h
o
r
;

$
s
h
o
w
t
i
m
e
-
>
d
e
b
u
g
 
=
 
$
C
O
N
F
I
G
-
>
d
e
b
u
g
;

$
s
h
o
w
t
i
m
e
-
>
m
a
i
l
e
r
 
=
 
$
C
O
N
F
I
G
-
>
m
a
i
l
e
r
;

$
s
h
o
w
t
i
m
e
-
>
m
a
i
l
f
r
o
m
 
=
 
$
C
O
N
F
I
G
-
>
m
a
i
l
f
r
o
m
;

$
s
h
o
w
t
i
m
e
-
>
f
r
o
m
n
a
m
e
 
=
 
$
C
O
N
F
I
G
-
>
f
r
o
m
n
a
m
e
;

$
s
h
o
w
t
i
m
e
-
>
s
e
n
d
m
a
i
l
 
=
 
$
C
O
N
F
I
G
-
>
s
e
n
d
m
a
i
l
;

$
s
h
o
w
t
i
m
e
-
>
s
m
t
p
a
u
t
h
 
=
 
$
C
O
N
F
I
G
-
>
s
m
t
p
a
u
t
h
;

$
s
h
o
w
t
i
m
e
-
>
s
m
t
p
u
s
e
r
 
=
 
$
C
O
N
F
I
G
-
>
s
m
t
p
u
s
e
r
;

$
s
h
o
w
t
i
m
e
-
>
s
m
t
p
p
a
s
s
 
=
 
$
C
O
N
F
I
G
-
>
s
m
t
p
p
a
s
s
;

$
s
h
o
w
t
i
m
e
-
>
s
m
t
p
h
o
s
t
 
=
 
$
C
O
N
F
I
G
-
>
s
m
t
p
h
o
s
t
;

$
s
h
o
w
t
i
m
e
-
>
s
m
t
p
s
e
c
u
r
e
 
=
 
$
C
O
N
F
I
G
-
>
s
m
t
p
s
e
c
u
r
e
;

$
s
h
o
w
t
i
m
e
-
>
s
m
t
p
p
o
r
t
 
=
 
$
C
O
N
F
I
G
-
>
s
m
t
p
p
o
r
t
;

$
s
h
o
w
t
i
m
e
-
>
s
e
c
r
e
t
 
=
 
$
C
O
N
F
I
G
-
>
s
e
c
r
e
t
;

$
s
h
o
w
t
i
m
e
-
>
d
b
p
r
e
f
i
x
 
=
 
$
C
O
N
F
I
G
-
>
d
b
p
r
e
f
i
x
;

$
s
h
o
w
t
i
m
e
-
>
u
s
e
r
 
=
 
$
C
O
N
F
I
G
-
>
u
s
e
r
;

$
s
h
o
w
t
i
m
e
-
>
p
a
s
s
w
o
r
d
 
=
 
$
C
O
N
F
I
G
-
>
p
a
s
s
w
o
r
d
;

$
s
h
o
w
t
i
m
e
-
>
d
b
 
=
 
$
C
O
N
F
I
G
-
>
d
b
;

$
s
h
o
w
t
i
m
e
-
>
h
o
s
t
 
=
 
$
C
O
N
F
I
G
-
>
h
o
s
t
;

$
s
h
o
w
t
i
m
e
-
>
h
e
l
p
u
r
l
 
=
 
$
C
O
N
F
I
G
-
>
h
e
l
p
u
r
l
;

$
s
h
o
w
t
i
m
e
-
>
e
d
i
t
o
r
 
=
 
$
C
O
N
F
I
G
-
>
e
d
i
t
o
r
;

$
s
h
o
w
t
i
m
e
-
>
c
a
c
h
i
n
g
 
=
 
$
C
O
N
F
I
G
-
>
c
a
c
h
i
n
g
;

$
s
h
o
w
t
i
m
e
-
>
c
a
c
h
e
t
i
m
e
 
=
 
$
C
O
N
F
I
G
-
>
c
a
c
h
e
t
i
m
e
;

$
s
h
o
w
t
i
m
e
-
>
o
f
f
s
e
t
 
=
 
$
C
O
N
F
I
G
-
>
o
f
f
s
e
t
;

$
s
h
o
w
t
i
m
e
-
>
s
e
f
 
=
 
$
C
O
N
F
I
G
-
>
s
e
f
;

$
s
h
o
w
t
i
m
e
-
>
g
z
i
p
 
=
 
$
C
O
N
F
I
G
-
>
g
z
i
p
;

