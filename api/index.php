
<
?
p
h
p

/
*
*

 
*
 
H
a
n
d
l
e
s
 
R
E
S
T
 
A
P
I
 
m
e
s
s
a
g
e
s

 
*

 
*
 
U
s
e
s
 
O
a
u
t
h
2
 
a
n
d
 
F
l
i
g
h
t
 
l
i
b
r
a
r
i
e
s
 
t
o
 
h
a
n
d
l
e
 
a
u
t
h
e
n
t
i
c
a
t
i
o
n
 
a
n
d
 
r
o
u
t
i
n
g
 
r
e
s
p
e
c
t
i
v
e
l
y
.
 
R
E
S
T
 
A
P
I
 
f
u
n
c
t
i
o
n
a
l
i
t
y
 
i
s
 
p
r
o
v
i
d
e
d
 
b
y
 
A
P
I
 
f
e
a
t
u
r
e
s
 
w
h
i
c
h
 
a
r
e
 
J
o
m
r
e
s
 
p
l
u
g
i
n
s
,
 
t
h
i
s
 
f
u
n
c
t
i
o
n
a
l
i
t
y
 
h
a
n
d
s
 
o
f
f
 
c
a
l
l
s
 
t
o
 
t
h
o
s
e
 
A
P
I
 
f
e
a
t
u
r
e
s
 
t
h
r
o
u
g
h
 
t
h
e
 
r
o
u
t
e
s
.
p
h
p
 
s
c
r
i
p
t
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
 
(
t
m
)
 
P
H
P
,
 
C
S
S
 
&
 
J
a
v
a
s
c
r
i
p
t
 
f
i
l
e
s
 
a
r
e
 
r
e
l
e
a
s
e
d
 
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
/


/
/
 
c
r
e
a
t
e
 
a
 
l
o
g
 
c
h
a
n
n
e
l

d
e
f
i
n
e
(
'
T
R
A
N
S
A
C
T
I
O
N
_
I
D
'
,
 
t
i
m
e
(
)
)
;


d
e
f
i
n
e
(
'
J
O
M
R
E
S
_
A
P
I
_
C
M
S
_
R
O
O
T
'
,
 
d
i
r
n
a
m
e
(
d
i
r
n
a
m
e
(
d
i
r
n
a
m
e
(
_
_
F
I
L
E
_
_
)
)
)
)
;

d
e
f
i
n
e
(
'
J
O
M
R
E
S
_
A
P
I
_
J
O
M
R
E
S
_
R
O
O
T
'
,
 
d
i
r
n
a
m
e
(
d
i
r
n
a
m
e
(
_
_
F
I
L
E
_
_
)
)
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
)
 
{

 
 
 
 
d
e
f
i
n
e
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
,
 
1
)
;

}


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
_
O
R
I
G
I
N
'
]
)
)
 
{

 
 
 
 
h
e
a
d
e
r
(
"
A
c
c
e
s
s
-
C
o
n
t
r
o
l
-
A
l
l
o
w
-
O
r
i
g
i
n
:
 
{
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
_
O
R
I
G
I
N
'
]
}
"
)
;

 
 
 
 
h
e
a
d
e
r
(
'
A
c
c
e
s
s
-
C
o
n
t
r
o
l
-
A
l
l
o
w
-
C
r
e
d
e
n
t
i
a
l
s
:
 
t
r
u
e
'
)
;

 
 
 
 
h
e
a
d
e
r
(
'
A
c
c
e
s
s
-
C
o
n
t
r
o
l
-
M
a
x
-
A
g
e
:
 
8
6
4
0
0
'
)
;

}


i
f
 
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
R
E
Q
U
E
S
T
_
M
E
T
H
O
D
'
]
 
=
=
 
'
O
P
T
I
O
N
S
'
)
 
{

 
 
 
 
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
_
A
C
C
E
S
S
_
C
O
N
T
R
O
L
_
R
E
Q
U
E
S
T
_
M
E
T
H
O
D
'
]
)
)
 
{

 
 
 
 
 
 
 
 
h
e
a
d
e
r
(
'
A
c
c
e
s
s
-
C
o
n
t
r
o
l
-
A
l
l
o
w
-
M
e
t
h
o
d
s
:
 
G
E
T
,
 
P
O
S
T
,
 
P
U
T
,
 
D
E
L
E
T
E
,
 
O
P
T
I
O
N
S
'
)
;

 
 
 
 
}

 
 
 
 
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
_
A
C
C
E
S
S
_
C
O
N
T
R
O
L
_
R
E
Q
U
E
S
T
_
H
E
A
D
E
R
S
'
]
)
)
 
{

 
 
 
 
 
 
 
 
h
e
a
d
e
r
(
"
A
c
c
e
s
s
-
C
o
n
t
r
o
l
-
A
l
l
o
w
-
H
e
a
d
e
r
s
:
 
{
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
_
A
C
C
E
S
S
_
C
O
N
T
R
O
L
_
R
E
Q
U
E
S
T
_
H
E
A
D
E
R
S
'
]
}
"
)
;

 
 
 
 
}

}


	

d
a
t
e
_
d
e
f
a
u
l
t
_
t
i
m
e
z
o
n
e
_
s
e
t
(
'
U
T
C
'
)
;

r
e
q
u
i
r
e
 
J
O
M
R
E
S
_
A
P
I
_
J
O
M
R
E
S
_
R
O
O
T
.
'
/
v
e
n
d
o
r
/
a
u
t
o
l
o
a
d
.
p
h
p
'
;

r
e
q
u
i
r
e
 
'
c
l
a
s
s
e
s
/
l
o
g
g
i
n
g
.
c
l
a
s
s
.
p
h
p
'
;

r
e
q
u
i
r
e
 
'
o
a
u
t
h
/
i
n
c
_
c
o
n
f
i
g
s
.
p
h
p
'
;


/
/
 
C
u
r
r
e
n
t
l
y
 
d
i
s
a
b
l
e
d
 
a
s
 
n
o
t
 
s
e
t
u
p
 
r
i
g
h
t
 
n
o
w
 
t
o
 
t
e
s
t
 
t
h
i
s
.

/
*
 
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
(
J
O
M
R
E
S
_
A
P
I
_
J
O
M
R
E
S
_
R
O
O
T
.
D
I
R
E
C
T
O
R
Y
_
S
E
P
A
R
A
T
O
R
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
)
;

i
f
 
(
!
i
s
s
e
t
(
$
j
r
C
o
n
f
i
g
[
'
a
p
i
_
f
o
r
c
e
_
s
s
l
'
]
)
)

 
 
 
 
$
j
r
C
o
n
f
i
g
[
'
a
p
i
_
f
o
r
c
e
_
s
s
l
'
]
 
=
 
t
r
u
e
;

e
l
s
e

 
 
 
 
$
j
r
C
o
n
f
i
g
[
'
a
p
i
_
f
o
r
c
e
_
s
s
l
'
]
 
=
 
(
b
o
o
l
)
 
$
j
r
C
o
n
f
i
g
[
'
a
p
i
_
f
o
r
c
e
_
s
s
l
'
]
 
;


$
h
t
t
p
s
 
=
 
f
a
l
s
e
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
)
 
&
&
 
/
/
 
n
g
i
n
x

 
 
 
 
 
 
 
 
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
P
O
R
T
'
]
 
=
=
=
 
'
4
4
3
'
)
)
 
{

 
 
 
 
$
h
t
t
p
s
 
=
 
t
r
u
e
;

}
 
e
l
s
e
 
i
f
 
(
 
!
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
H
T
T
P
S
'
]
 
!
=
 
'
o
n
'
)
 
{
 
/
/
 
A
p
a
c
h
e
 
&
 
I
I
S

 
 
 
 
$
h
t
t
p
s
 
=
 
f
a
l
s
e
;

}

 
 
 
 

i
f
 
(
 
$
h
t
t
p
s
 
=
=
 
f
a
l
s
e
 
&
&
 
$
j
r
C
o
n
f
i
g
[
'
a
p
i
_
f
o
r
c
e
_
s
s
l
'
]
 
=
=
 
t
r
u
e
 
)
 
{

 
 
 
 
F
l
i
g
h
t
:
:
h
a
l
t
(
 
"
4
0
3
"
 
,
"
Y
o
u
 
c
a
n
n
o
t
 
a
c
c
e
s
s
 
t
h
i
s
 
A
P
I
 
v
i
a
 
a
 
n
o
n
-
e
n
c
r
y
p
t
e
d
 
u
r
l
"
)
;

}
 
*
/



/
/
 
W
e
 
w
i
l
l
 
p
a
r
s
e
 
t
h
e
 
u
r
l
 
a
n
d
 
f
i
n
d
 
o
u
t
 
e
x
a
c
t
l
y
 
w
h
a
t
 
t
h
e
 
c
a
l
l
 
w
i
s
h
e
s
 
t
o
 
d
o
.
 

$
r
e
q
u
e
s
t
 
=
 
F
l
i
g
h
t
:
:
r
e
q
u
e
s
t
(
)
;

$
b
a
n
g
 
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
r
e
q
u
e
s
t
-
>
u
r
l
)
;

i
f
 
(
s
t
r
p
o
s
(
$
b
a
n
g
[
1
]
,
 
'
?
'
)
 
!
=
=
 
f
a
l
s
e
)
 
{
 
/
/
 
H
a
s
 
t
h
e
 
c
l
i
e
n
t
 
a
p
p
e
n
d
e
d
 
t
h
e
 
t
o
k
e
n
 
t
o
 
t
h
e
 
u
r
l
?
 
I
f
 
s
o
,
 
w
e
'
l
l
 
d
e
t
e
c
t
 
i
t
 
h
e
r
e
 
a
n
d
 
f
i
g
u
r
e
 
o
u
t
 
t
h
e
 
r
o
u
t
e
 
b
a
s
e
d
 
o
n
 
e
x
p
l
o
d
e

 
 
 
 
$
p
o
p
 
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
b
a
n
g
[
1
]
)
;

 
 
 
 
$
r
o
u
t
e
 
=
 
$
p
o
p
[
0
]
;

}
 
e
l
s
e
 
{

 
 
 
 
$
r
o
u
t
e
 
=
 
f
i
l
t
e
r
_
v
a
r
(
$
b
a
n
g
[
1
]
,
 
F
I
L
T
E
R
_
S
A
N
I
T
I
Z
E
_
S
T
R
I
N
G
)
;

}


/
/
 
L
e
t
'
s
 
s
e
e
 
i
f
 
t
h
e
 
r
o
u
t
e
 
c
h
o
s
e
n
 
i
s
 
a
u
t
h
-
f
r
e
e
,
 
o
r
 
i
f
 
i
t
 
r
e
q
u
i
r
e
s
 
a
u
t
h
e
n
t
i
c
a
t
i
o
n
.
 
I
f
 
a
n
 
A
P
I
 
f
e
a
t
u
r
e
 
w
a
n
t
s
 
t
o
 
b
e
 
a
 
"
f
r
e
e
"
 
r
o
u
t
e
 
(
 
o
n
e
 
t
h
a
t
 
d
o
e
s
 
n
o
t
 
r
e
q
u
i
r
e
 
a
n
 
a
u
t
h
e
n
t
i
c
a
t
e
d
 
c
l
i
e
n
t
 
i
d
 
&
 
s
e
c
r
e
t
 
p
a
i
r
 
)
 
i
t
 
m
u
s
t
 
e
x
p
l
i
c
i
t
e
l
y
 
d
e
c
l
a
r
e
 
i
t
s
e
l
f
 
a
s
 
"
f
r
e
e
"
 
v
i
a
 
a
 
j
s
o
n
 
f
i
l
e
.

r
e
q
u
i
r
e
 
'
c
l
a
s
s
e
s
/
a
l
l
_
a
p
i
_
f
e
a
t
u
r
e
s
.
c
l
a
s
s
.
p
h
p
'
;

$
a
p
i
_
f
e
a
t
u
r
e
s
 
=
 
n
e
w
 
a
l
l
_
a
p
i
_
f
e
a
t
u
r
e
s
(
)
;

$
f
e
a
t
u
r
e
s
_
f
i
l
e
s
 
=
 
$
a
p
i
_
f
e
a
t
u
r
e
s
-
>
g
e
t
(
)
;

$
a
u
t
h
_
f
r
e
e
_
r
o
u
t
e
s
 
=
 
$
a
p
i
_
f
e
a
t
u
r
e
s
-
>
g
e
t
_
a
u
t
h
f
r
e
e
_
r
o
u
t
e
s
(
)
;


i
f
 
(
!
i
n
_
a
r
r
a
y
(
$
r
o
u
t
e
,
$
a
u
t
h
_
f
r
e
e
_
r
o
u
t
e
s
)
 
)
 
{

	
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
_
P
O
S
T
[
'
g
r
a
n
t
_
t
y
p
e
'
]
)
 
&
&
 
(
$
_
P
O
S
T
[
'
g
r
a
n
t
_
t
y
p
e
'
]
 
=
=
 
'
c
l
i
e
n
t
_
c
r
e
d
e
n
t
i
a
l
s
'
 
|
|
 
$
_
P
O
S
T
[
'
g
r
a
n
t
_
t
y
p
e
'
]
 
=
=
 
'
a
u
t
h
o
r
i
z
a
t
i
o
n
_
c
o
d
e
'
)
)
 
{

	
	
i
f
 
(
!
i
s
s
e
t
(
$
_
P
O
S
T
[
'
c
l
i
e
n
t
_
i
d
'
]
)
)
 
{

	
	
	
$
_
P
O
S
T
[
'
c
l
i
e
n
t
_
i
d
'
]
 
=
 
'
'
;

	
	
}


	
	
$
c
l
i
e
n
t
_
i
d
 
=
 
f
i
l
t
e
r
_
v
a
r
(
$
_
P
O
S
T
[
'
c
l
i
e
n
t
_
i
d
'
]
,
 
F
I
L
T
E
R
_
S
A
N
I
T
I
Z
E
_
S
T
R
I
N
G
,
 
F
I
L
T
E
R
_
F
L
A
G
_
S
T
R
I
P
_
H
I
G
H
)
;

	
	
l
o
g
g
i
n
g
:
:
l
o
g
_
m
e
s
s
a
g
e
(
'
R
e
c
e
i
v
e
d
 
a
 
t
o
k
e
n
 
r
e
q
u
e
s
t
 
f
r
o
m
 
'
.
$
c
l
i
e
n
t
_
i
d
,
 
'
A
P
I
'
,
 
'
I
N
F
O
'
)
;

	
	
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
 
_
_
D
I
R
_
_
.
'
/
o
a
u
t
h
/
t
o
k
e
n
.
p
h
p
'
;

	
}
 
e
l
s
e
 
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
_
G
E
T
[
'
c
l
i
e
n
t
_
i
d
'
]
)
)
 
{

	
	
$
c
l
i
e
n
t
_
i
d
 
=
 
f
i
l
t
e
r
_
v
a
r
(
$
_
G
E
T
[
'
c
l
i
e
n
t
_
i
d
'
]
,
 
F
I
L
T
E
R
_
S
A
N
I
T
I
Z
E
_
S
T
R
I
N
G
,
 
F
I
L
T
E
R
_
F
L
A
G
_
S
T
R
I
P
_
H
I
G
H
)
;

	
	
l
o
g
g
i
n
g
:
:
l
o
g
_
m
e
s
s
a
g
e
(
'
R
e
c
e
i
v
e
d
 
a
 
t
o
k
e
n
 
r
e
q
u
e
s
t
 
f
r
o
m
 
'
.
$
c
l
i
e
n
t
_
i
d
,
 
'
A
P
I
'
,
 
'
I
N
F
O
'
)
;

	
	
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
 
_
_
D
I
R
_
_
.
'
/
o
a
u
t
h
/
t
o
k
e
n
.
p
h
p
'
;

	
}
 
e
l
s
e
 
{

	
	
$
r
e
q
u
e
s
t
 
=
 
f
i
l
t
e
r
_
v
a
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
,
 
F
I
L
T
E
R
_
S
A
N
I
T
I
Z
E
_
S
T
R
I
N
G
,
 
F
I
L
T
E
R
_
F
L
A
G
_
S
T
R
I
P
_
H
I
G
H
)
;

	
	
l
o
g
g
i
n
g
:
:
l
o
g
_
m
e
s
s
a
g
e
(
'
 
R
e
c
e
i
v
e
d
 
a
 
t
o
k
e
n
 
w
h
i
c
h
 
s
e
n
t
 
'
.
$
r
e
q
u
e
s
t
,
 
'
A
P
I
'
,
 
'
I
N
F
O
'
)
;

	
	
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
 
_
_
D
I
R
_
_
.
'
/
o
a
u
t
h
/
r
e
s
o
u
r
c
e
.
p
h
p
'
;

	
}

}



i
f
 
(
!
P
R
O
D
U
C
T
I
O
N
)
 
{

 
 
 
 
i
n
i
_
s
e
t
(
'
d
i
s
p
l
a
y
_
e
r
r
o
r
s
'
,
 
'
1
'
)
;

}



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
)
 
{

 
 
 
 
d
e
f
i
n
e
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
,
 
1
)
;

}


r
e
q
u
i
r
e
 
'
c
l
a
s
s
e
s
/
v
a
l
i
d
a
t
e
_
s
c
o
p
e
.
c
l
a
s
s
.
p
h
p
'
;

r
e
q
u
i
r
e
 
'
c
l
a
s
s
e
s
/
v
a
l
i
d
a
t
e
_
p
r
o
p
e
r
t
y
_
a
c
c
e
s
s
.
c
l
a
s
s
.
p
h
p
'
;

r
e
q
u
i
r
e
 
'
c
l
a
s
s
e
s
/
c
a
l
l
.
c
l
a
s
s
.
p
h
p
'
;

r
e
q
u
i
r
e
 
'
c
l
a
s
s
e
s
/
c
a
l
l
_
s
e
l
f
.
c
l
a
s
s
.
p
h
p
'
;


d
e
f
i
n
e
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
,
 
t
r
u
e
)
;


/
/
 
$
s
e
r
v
e
r
 
w
i
l
l
 
b
e
 
n
u
l
l
 
i
f
 
a
u
t
h
e
n
t
i
c
a
t
i
o
n
 
h
a
s
 
n
o
t
 
b
e
e
n
 
u
s
e
d
 
(
 
i
.
e
.
 
t
h
i
s
 
i
s
 
a
 
"
f
r
e
e
"
 
r
o
u
t
e
,
 
i
n
 
w
h
i
c
h
 
c
a
s
e
 
t
o
k
e
n
 
(
w
h
i
c
h
 
c
o
n
t
a
i
n
s
 
t
h
e
 
a
c
c
e
s
s
 
t
o
k
e
n
,
 
p
l
u
s
 
s
c
o
p
e
 
i
n
f
o
r
m
a
t
i
o
n
 
)
 
i
s
 
n
o
t
 
r
e
l
e
v
a
n
t
 
)

/
/
 
I
n
d
i
v
i
d
u
a
l
 
a
p
i
 
f
e
a
t
u
r
e
s
 
(
 
s
h
o
u
l
d
 
)
 
a
l
w
a
y
s
 
v
a
l
i
d
a
t
e
 
t
h
a
t
 
a
 
u
s
e
r
 
c
a
n
 
p
e
r
f
o
r
m
 
a
 
c
e
r
t
a
i
n
 
a
c
t
i
o
n
 
t
h
r
o
u
g
h
 
t
h
e
 
"
v
a
l
i
d
a
t
e
_
s
c
o
p
e
:
:
v
a
l
i
d
a
t
e
(
'
s
e
a
r
c
h
_
g
e
t
'
)
;
"
 
c
a
l
l
.
 

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
s
e
r
v
e
r
)
 
&
&
 
!
i
s
_
n
u
l
l
(
$
s
e
r
v
e
r
)
)
 
{

	
$
t
o
k
e
n
 
=
 
$
s
e
r
v
e
r
-
>
g
e
t
A
c
c
e
s
s
T
o
k
e
n
D
a
t
a
(
O
A
u
t
h
2
\
R
e
q
u
e
s
t
:
:
c
r
e
a
t
e
F
r
o
m
G
l
o
b
a
l
s
(
)
)
;

	
$
s
c
o
p
e
s
 
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
,
'
,
 
$
t
o
k
e
n
[
'
s
c
o
p
e
'
]
)
;

}
 
e
l
s
e
 
{

	
$
t
o
k
e
n
 
=
 
a
r
r
a
y
 
(

	
	
"
a
c
c
e
s
s
_
t
o
k
e
n
"
 
=
>
 
n
u
l
l
,

	
	
"
c
l
i
e
n
t
_
i
d
"
 
=
>
 
n
u
l
l
,

	
	
"
u
s
e
r
_
i
d
"
 
=
>
 
0
,

	
	
"
e
x
p
i
r
e
s
"
 
=
>
 
0
,

	
	
"
s
c
o
p
e
"
 
=
>
 
'
'

	
)
;

}


r
e
q
u
i
r
e
 
'
p
u
t
_
m
e
t
h
o
d
_
h
a
n
d
l
i
n
g
.
p
h
p
'
;


t
r
y
 
{

 
 
 
 
$
d
s
n
 
=
 
'
m
y
s
q
l
:
d
b
n
a
m
e
=
'
.
J
O
M
R
E
S
_
A
P
I
_
D
B
_
N
A
M
E
.
'
;
h
o
s
t
=
'
.
J
O
M
R
E
S
_
A
P
I
_
D
B
_
H
O
S
T
;

 
 
 
 
F
l
i
g
h
t
:
:
r
e
g
i
s
t
e
r
(

 
 
 
 
 
 
 
 
'
d
b
'
,

 
 
 
 
 
 
 
 
'
P
D
O
'
,

 
 
 
 
 
 
 
 
a
r
r
a
y
(

 
 
 
 
 
 
 
 
 
 
 
 
$
d
s
n
,

 
 
 
 
 
 
 
 
 
 
 
 
J
O
M
R
E
S
_
A
P
I
_
D
B
_
U
S
E
R
N
A
M
E
,

 
 
 
 
 
 
 
 
 
 
 
 
J
O
M
R
E
S
_
A
P
I
_
D
B
_
P
A
S
S
W
O
R
D
,

 
 
 
 
 
 
 
 
 
 
 
 
a
r
r
a
y
(

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
P
D
O
:
:
A
T
T
R
_
E
R
R
M
O
D
E
 
=
>
 
P
D
O
:
:
E
R
R
M
O
D
E
_
E
X
C
E
P
T
I
O
N
,

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
P
D
O
:
:
A
T
T
R
_
E
M
U
L
A
T
E
_
P
R
E
P
A
R
E
S
 
=
>
 
f
a
l
s
e
,

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
)
,

 
 
 
 
 
 
 
 
 
 
 
 
)

 
 
 
 
 
 
 
 
)
;


 
 
 
 
F
l
i
g
h
t
:
:
s
e
t
(
'
t
o
k
e
n
'
,
 
$
t
o
k
e
n
)
;

 
 
 
 
F
l
i
g
h
t
:
:
s
e
t
(
'
u
s
e
r
_
i
d
'
,
 
$
t
o
k
e
n
[
'
u
s
e
r
_
i
d
'
]
)
;

 
 
 
 
F
l
i
g
h
t
:
:
s
e
t
(
'
s
c
o
p
e
s
'
,
 
e
x
p
l
o
d
e
(
'
,
'
,
 
$
t
o
k
e
n
[
'
s
c
o
p
e
'
]
)
)
;

 
 
 
 
F
l
i
g
h
t
:
:
s
e
t
(
'
d
b
p
r
e
f
i
x
'
,
 
J
O
M
R
E
S
_
A
P
I
_
D
B
_
D
B
_
P
R
E
F
I
X
)
;

 
 
 
 
F
l
i
g
h
t
:
:
s
e
t
(
'
f
e
a
t
u
r
e
s
_
f
i
l
e
s
'
,
 
$
f
e
a
t
u
r
e
s
_
f
i
l
e
s
)
;


 
 
 
 
r
e
q
u
i
r
e
 
'
c
u
s
t
o
m
_
m
e
t
h
o
d
s
.
p
h
p
'
;

 
 
 
 
r
e
q
u
i
r
e
 
'
r
o
u
t
e
s
.
p
h
p
'
;


 
 
 
 
F
l
i
g
h
t
:
:
s
t
a
r
t
(
)
;

}
 
c
a
t
c
h
 
(
E
x
c
e
p
t
i
o
n
 
$
e
)
 
{

 
 
 
 
i
f
 
(
$
e
-
>
g
e
t
M
e
s
s
a
g
e
(
)
 
!
=
 
'
'
 
)
 
{

 
 
 
 
 
 
 
 
$
r
e
s
p
o
n
s
e
 
=
 
$
e
-
>
g
e
t
M
e
s
s
a
g
e
(
)
;

 
 
 
 
 
 
 
 
i
f
 
(
!
P
R
O
D
U
C
T
I
O
N
)

 
 
 
 
 
 
 
 
 
 
 
 
e
c
h
o
 
j
s
o
n
_
e
n
c
o
d
e
(
$
r
e
s
p
o
n
s
e
)
;

 
 
 
 
 
 
 
 
}

 
 
 
 
e
l
s
e
 
{

 
 
 
 
 
 
 
 
$
r
e
s
p
o
n
s
e
 
=
 
F
l
i
g
h
t
:
:
r
e
q
u
e
s
t
_
r
e
s
p
o
n
s
e
(
)
;

 
 
 
 
 
 
 
 
}

 
 
 
 

 
 
 
 
$
b
a
c
k
t
r
a
c
e
 
=
 
d
e
b
u
g
_
b
a
c
k
t
r
a
c
e
(
)
;

 
 
 
 
l
o
g
g
i
n
g
:
:
l
o
g
_
m
e
s
s
a
g
e
(
j
s
o
n
_
e
n
c
o
d
e
(
$
r
e
s
p
o
n
s
e
)
,
 
'
A
P
I
'
,
 
'
E
R
R
O
R
'
)
;

}

