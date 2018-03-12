
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


c
l
a
s
s
 
j
0
6
0
0
5
n
e
w
_
p
r
o
p
e
r
t
y

{

 
 
 
 
p
u
b
l
i
c
 
f
u
n
c
t
i
o
n
 
_
_
c
o
n
s
t
r
u
c
t
(
)

 
 
 
 
{

 
 
 
 
 
 
 
 
/
/
 
M
u
s
t
 
b
e
 
i
n
 
a
l
l
 
m
i
n
i
c
o
m
p
o
n
e
n
t
s
.
 
M
i
n
i
c
o
m
p
o
n
e
n
t
s
 
w
i
t
h
 
t
e
m
p
l
a
t
e
s
 
t
h
a
t
 
c
a
n
 
c
o
n
t
a
i
n
 
e
d
i
t
a
b
l
e
 
t
e
x
t
 
s
h
o
u
l
d
 
r
u
n
 
$
t
h
i
s
-
>
t
e
m
p
l
a
t
e
_
t
o
u
c
h
(
)
 
e
l
s
e
 
j
u
s
t
 
r
e
t
u
r
n

 
 
 
 
 
 
 
 
$
M
i
n
i
C
o
m
p
o
n
e
n
t
s
 
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
m
c
H
a
n
d
l
e
r
'
)
;

 
 
 
 
 
 
 
 
i
f
 
(
$
M
i
n
i
C
o
m
p
o
n
e
n
t
s
-
>
t
e
m
p
l
a
t
e
_
t
o
u
c
h
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
t
e
m
p
l
a
t
e
_
t
o
u
c
h
a
b
l
e
 
=
 
f
a
l
s
e
;

 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
s
h
o
r
t
c
o
d
e
_
d
a
t
a
 
=
 
a
r
r
a
y
(

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
'
t
a
s
k
'
 
=
>
 
'
n
e
w
_
p
r
o
p
e
r
t
y
'
,

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
'
i
n
f
o
'
 
=
>
 
'
_
J
O
M
R
E
S
_
S
H
O
R
T
C
O
D
E
S
_
0
6
0
0
5
N
E
W
_
P
R
O
P
E
R
T
Y
'
,

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
'
a
r
g
u
m
e
n
t
s
'
 
=
>
 
a
r
r
a
y
(
)

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
)
;

 
 
 
 
 
 
 
 
 
 
 
 
r
e
t
u
r
n
;

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
$
s
i
t
e
C
o
n
f
i
g
 
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
j
o
m
r
e
s
_
c
o
n
f
i
g
_
s
i
t
e
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
'
)
;

 
 
 
 
 
 
 
 
$
j
r
C
o
n
f
i
g
 
=
 
$
s
i
t
e
C
o
n
f
i
g
-
>
g
e
t
(
)
;


 
 
 
 
 
 
 
 
$
t
h
i
s
J
R
U
s
e
r
 
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
j
r
_
u
s
e
r
'
)
;

	
	

	
	
$
j
o
m
r
e
s
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
t
y
p
e
s
 
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
j
o
m
r
e
s
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
t
y
p
e
s
'
)
;


 
 
 
 
 
 
 
 
i
f
 
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
s
e
l
f
R
e
g
i
s
t
r
a
t
i
o
n
A
l
l
o
w
e
d
'
]
 
=
=
 
'
0
'
 
&
&
 
!
$
t
h
i
s
J
R
U
s
e
r
-
>
s
u
p
e
r
P
r
o
p
e
r
t
y
M
a
n
a
g
e
r
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
r
e
t
u
r
n
;

 
 
 
 
 
 
 
 
}

	
	

	
	
/
/
 
Y
o
u
 
c
a
n
,
 
b
y
 
a
l
l
 
m
e
a
n
s
,
 
r
e
m
o
v
e
 
t
h
i
s
 
s
e
c
t
i
o
n
 
o
f
 
c
o
d
e
 
b
u
t
 
i
t
'
s
 
o
n
l
y
 
h
e
r
e
 
t
o
 
e
n
s
u
r
e
 
y
o
u
 
d
o
n
'
t
 
l
o
c
k
 
y
o
u
r
s
e
l
f
 
o
u
t
 
o
f
 
y
o
u
r
 
o
w
n
 
s
y
s
t
e
m
 
a
c
c
i
d
e
n
t
a
l
l
y

	
	
i
f
 
(
f
u
n
c
t
i
o
n
_
e
x
i
s
t
s
(
"
g
e
t
_
n
u
m
b
e
r
_
o
f
_
a
l
l
o
w
e
d
_
p
r
o
p
e
r
t
i
e
s
"
)
 
)
 
{

	
	
	
i
f
 
(
g
e
t
_
s
h
o
w
t
i
m
e
(
'
n
u
m
b
e
r
O
f
P
r
o
p
e
r
t
i
e
s
I
n
S
y
s
t
e
m
'
)
 
>
=
 
g
e
t
_
n
u
m
b
e
r
_
o
f
_
a
l
l
o
w
e
d
_
p
r
o
p
e
r
t
i
e
s
(
)
 
)
 
{

	
	
	
	
e
c
h
o
 
'
<
p
 
c
l
a
s
s
=
"
a
l
e
r
t
 
a
l
e
r
t
-
d
a
n
g
e
r
"
>
E
r
r
o
r
,
 
y
o
u
r
 
l
i
c
e
n
s
e
 
d
o
e
s
 
n
o
t
 
a
l
l
o
w
 
y
o
u
 
t
o
 
a
d
d
 
m
o
r
e
 
p
r
o
p
e
r
t
i
e
s
<
/
p
>
'
;

	
	
	
	
r
e
t
u
r
n
;

	
	
	
}

	
	
}


	
	
	

 
 
 
 
 
 
 
 
/
/
g
e
t
 
s
e
l
e
c
t
e
d
 
c
o
u
n
t
r
y

 
 
 
 
 
 
 
 
$
s
e
l
e
c
t
e
d
C
o
u
n
t
r
y
 
=
 
j
o
m
r
e
s
G
e
t
P
a
r
a
m
(
$
_
R
E
Q
U
E
S
T
,
 
'
n
e
w
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
c
o
u
n
t
r
y
'
,
 
'
'
)
;

 
 
 
 
 
 
 
 
i
f
 
(
$
s
e
l
e
c
t
e
d
C
o
u
n
t
r
y
 
=
=
 
'
'
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
s
e
l
e
c
t
e
d
C
o
u
n
t
r
y
 
=
 
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
l
i
m
i
t
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
c
o
u
n
t
r
y
_
c
o
u
n
t
r
y
'
]
;

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
$
o
u
t
p
u
t
 
=
 
a
r
r
a
y
(
)
;

 
 
 
 
 
 
 
 
$
p
r
o
p
e
r
t
y
R
e
g
i
o
n
 
=
 
'
'
;


 
 
 
 
 
 
 
 
/
/
s
e
t
u
p
 
c
o
u
n
t
r
i
e
s
 
a
n
d
 
r
e
g
i
o
n
s
 
d
r
o
p
d
o
w
n
s

 
 
 
 
 
 
 
 
i
f
 
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
l
i
m
i
t
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
c
o
u
n
t
r
y
'
]
 
=
=
 
'
0
'
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
o
u
t
p
u
t
[
'
R
E
G
I
O
N
D
R
O
P
D
O
W
N
'
]
 
=
 
s
e
t
u
p
R
e
g
i
o
n
s
(
$
s
e
l
e
c
t
e
d
C
o
u
n
t
r
y
,
 
$
p
r
o
p
e
r
t
y
R
e
g
i
o
n
)
;

 
 
 
 
 
 
 
 
 
 
 
 
$
o
u
t
p
u
t
[
'
C
O
U
N
T
R
I
E
S
D
R
O
P
D
O
W
N
'
]
 
=
 
c
r
e
a
t
e
C
o
u
n
t
r
i
e
s
D
r
o
p
d
o
w
n
(
$
s
e
l
e
c
t
e
d
C
o
u
n
t
r
y
,
 
'
n
e
w
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
c
o
u
n
t
r
y
'
,
 
f
a
l
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
o
u
t
p
u
t
[
'
R
E
G
I
O
N
D
R
O
P
D
O
W
N
'
]
 
=
 
s
e
t
u
p
R
e
g
i
o
n
s
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
l
i
m
i
t
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
c
o
u
n
t
r
y
_
c
o
u
n
t
r
y
'
]
,
 
$
p
r
o
p
e
r
t
y
R
e
g
i
o
n
)
;

 
 
 
 
 
 
 
 
 
 
 
 
$
o
u
t
p
u
t
[
'
C
O
U
N
T
R
I
E
S
D
R
O
P
D
O
W
N
'
]
 
=
 
g
e
t
S
i
m
p
l
e
C
o
u
n
t
r
y
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
l
i
m
i
t
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
c
o
u
n
t
r
y
_
c
o
u
n
t
r
y
'
]
)
;

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
$
o
u
t
p
u
t
[
'
P
A
G
E
T
I
T
L
E
'
]
 
=
 
j
r
_
g
e
t
t
e
x
t
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
C
O
M
_
M
R
_
N
E
W
P
R
O
P
E
R
T
Y
'
,
 
'
_
J
O
M
R
E
S
_
C
O
M
_
M
R
_
N
E
W
P
R
O
P
E
R
T
Y
'
,
 
f
a
l
s
e
)
;

 
 
 
 
 
 
 
 
$
o
u
t
p
u
t
[
'
H
C
O
U
N
T
R
Y
'
]
 
=
 
j
r
_
g
e
t
t
e
x
t
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
C
O
M
_
M
R
_
V
R
C
T
_
P
R
O
P
E
R
T
Y
_
H
E
A
D
E
R
_
C
O
U
N
T
R
Y
'
,
 
'
_
J
O
M
R
E
S
_
C
O
M
_
M
R
_
V
R
C
T
_
P
R
O
P
E
R
T
Y
_
H
E
A
D
E
R
_
C
O
U
N
T
R
Y
'
,
 
f
a
l
s
e
)
;

 
 
 
 
 
 
 
 
$
o
u
t
p
u
t
[
'
H
R
E
G
I
O
N
'
]
 
=
 
j
r
_
g
e
t
t
e
x
t
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
C
O
M
_
M
R
_
V
R
C
T
_
P
R
O
P
E
R
T
Y
_
H
E
A
D
E
R
_
R
E
G
I
O
N
'
,
 
'
_
J
O
M
R
E
S
_
C
O
M
_
M
R
_
V
R
C
T
_
P
R
O
P
E
R
T
Y
_
H
E
A
D
E
R
_
R
E
G
I
O
N
'
,
 
f
a
l
s
e
)
;

 
 
 
 
 
 
 
 
$
o
u
t
p
u
t
[
'
H
N
A
M
E
'
]
 
=
 
j
r
_
g
e
t
t
e
x
t
(
'
_
J
R
P
O
R
T
A
L
_
P
R
O
P
E
R
T
I
E
S
_
P
R
O
P
E
R
T
Y
N
A
M
E
'
,
 
'
_
J
R
P
O
R
T
A
L
_
P
R
O
P
E
R
T
I
E
S
_
P
R
O
P
E
R
T
Y
N
A
M
E
'
,
 
f
a
l
s
e
)
;

 
 
 
 
 
 
 
 
$
o
u
t
p
u
t
[
'
H
E
M
A
I
L
'
]
 
=
 
j
r
_
g
e
t
t
e
x
t
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
C
O
M
_
M
R
_
V
R
C
T
_
P
R
O
P
E
R
T
Y
_
H
E
A
D
E
R
_
E
M
A
I
L
'
,
 
'
_
J
O
M
R
E
S
_
C
O
M
_
M
R
_
V
R
C
T
_
P
R
O
P
E
R
T
Y
_
H
E
A
D
E
R
_
E
M
A
I
L
'
,
 
f
a
l
s
e
)
;

 
 
 
 
 
 
 
 
$
o
u
t
p
u
t
[
'
_
J
O
M
R
E
S
_
F
I
E
L
D
S
_
H
I
G
H
L
I
G
H
T
E
D
_
A
R
E
_
R
E
Q
U
I
R
E
D
'
]
 
=
 
j
r
_
g
e
t
t
e
x
t
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
F
I
E
L
D
S
_
H
I
G
H
L
I
G
H
T
E
D
_
A
R
E
_
R
E
Q
U
I
R
E
D
'
,
 
'
_
J
O
M
R
E
S
_
F
I
E
L
D
S
_
H
I
G
H
L
I
G
H
T
E
D
_
A
R
E
_
R
E
Q
U
I
R
E
D
'
,
 
f
a
l
s
e
)
;


 
 
 
 
 
 
 
 
$
o
u
t
p
u
t
[
'
J
O
M
R
E
S
_
P
R
O
P
E
R
T
Y
_
R
E
G
I
S
T
R
A
T
I
O
N
_
I
N
S
T
R
U
C
T
I
O
N
S
_
T
I
T
L
E
'
]
 
=
 
j
r
_
g
e
t
t
e
x
t
(
'
J
O
M
R
E
S
_
P
R
O
P
E
R
T
Y
_
R
E
G
I
S
T
R
A
T
I
O
N
_
I
N
S
T
R
U
C
T
I
O
N
S
_
T
I
T
L
E
'
,
 
'
J
O
M
R
E
S
_
P
R
O
P
E
R
T
Y
_
R
E
G
I
S
T
R
A
T
I
O
N
_
I
N
S
T
R
U
C
T
I
O
N
S
_
T
I
T
L
E
'
,
 
f
a
l
s
e
)
;

 
 
 
 
 
 
 
 
$
o
u
t
p
u
t
[
'
J
O
M
R
E
S
_
P
R
O
P
E
R
T
Y
_
R
E
G
I
S
T
R
A
T
I
O
N
_
I
N
S
T
R
U
C
T
I
O
N
S
_
N
O
T
E
1
'
]
 
=
 
j
r
_
g
e
t
t
e
x
t
(
'
J
O
M
R
E
S
_
P
R
O
P
E
R
T
Y
_
R
E
G
I
S
T
R
A
T
I
O
N
_
I
N
S
T
R
U
C
T
I
O
N
S
_
N
O
T
E
1
'
,
 
'
J
O
M
R
E
S
_
P
R
O
P
E
R
T
Y
_
R
E
G
I
S
T
R
A
T
I
O
N
_
I
N
S
T
R
U
C
T
I
O
N
S
_
N
O
T
E
1
'
,
 
f
a
l
s
e
)
;

 
 
 
 
 
 
 
 
$
o
u
t
p
u
t
[
'
J
O
M
R
E
S
_
P
R
O
P
E
R
T
Y
_
R
E
G
I
S
T
R
A
T
I
O
N
_
I
N
S
T
R
U
C
T
I
O
N
S
_
N
O
T
E
2
'
]
 
=
 
j
r
_
g
e
t
t
e
x
t
(
'
J
O
M
R
E
S
_
P
R
O
P
E
R
T
Y
_
R
E
G
I
S
T
R
A
T
I
O
N
_
I
N
S
T
R
U
C
T
I
O
N
S
_
N
O
T
E
2
'
,
 
'
J
O
M
R
E
S
_
P
R
O
P
E
R
T
Y
_
R
E
G
I
S
T
R
A
T
I
O
N
_
I
N
S
T
R
U
C
T
I
O
N
S
_
N
O
T
E
2
'
,
 
f
a
l
s
e
)
;


 
 
 
 
 
 
 
 
$
o
u
t
p
u
t
[
'
H
P
R
O
P
E
R
T
Y
_
T
Y
P
E
'
]
 
=
 
j
r
_
g
e
t
t
e
x
t
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
F
R
O
N
T
_
P
T
Y
P
E
'
,
 
'
_
J
O
M
R
E
S
_
F
R
O
N
T
_
P
T
Y
P
E
'
,
 
f
a
l
s
e
)
;

 
 
 
 
 
 
 
 
$
o
u
t
p
u
t
[
'
P
R
O
P
E
R
T
Y
_
T
Y
P
E
_
D
R
O
P
D
O
W
N
'
]
 
=
 
$
j
o
m
r
e
s
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
t
y
p
e
s
-
>
g
e
t
P
r
o
p
e
r
t
y
T
y
p
e
D
r
o
p
d
o
w
n
(
'
'
,
 
t
r
u
e
)
;


 
 
 
 
 
 
 
 
$
p
a
g
e
o
u
t
p
u
t
[
]
 
=
 
$
o
u
t
p
u
t
;

 
 
 
 
 
 
 
 
$
t
m
p
l
 
=
 
n
e
w
 
p
a
t
T
e
m
p
l
a
t
e
(
)
;

 
 
 
 
 
 
 
 
$
t
m
p
l
-
>
s
e
t
R
o
o
t
(
J
O
M
R
E
S
_
T
E
M
P
L
A
T
E
P
A
T
H
_
B
A
C
K
E
N
D
)
;

 
 
 
 
 
 
 
 
$
t
m
p
l
-
>
r
e
a
d
T
e
m
p
l
a
t
e
s
F
r
o
m
I
n
p
u
t
(
'
n
e
w
_
p
r
o
p
e
r
t
y
.
h
t
m
l
'
)
;

 
 
 
 
 
 
 
 
$
t
m
p
l
-
>
a
d
d
R
o
w
s
(
'
p
a
g
e
o
u
t
p
u
t
'
,
 
$
p
a
g
e
o
u
t
p
u
t
)
;

 
 
 
 
 
 
 
 
$
t
m
p
l
-
>
d
i
s
p
l
a
y
P
a
r
s
e
d
T
e
m
p
l
a
t
e
(
)
;

 
 
 
 
}


 
 
 
 
/
/
 
T
h
i
s
 
m
u
s
t
 
b
e
 
i
n
c
l
u
d
e
d
 
i
n
 
e
v
e
r
y
 
E
v
e
n
t
/
M
i
n
i
-
c
o
m
p
o
n
e
n
t

 
 
 
 
p
u
b
l
i
c
 
f
u
n
c
t
i
o
n
 
g
e
t
R
e
t
V
a
l
s
(
)

 
 
 
 
{

 
 
 
 
 
 
 
 
r
e
t
u
r
n
 
n
u
l
l
;

 
 
 
 
}

}

