
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
1
6
0
0
0
v
i
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
r
e
v
i
e
w
s

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
$
c
o
m
p
o
n
e
n
t
A
r
g
s
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


 
 
 
 
 
 
 
 
 
 
 
 
r
e
t
u
r
n
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
a
g
e
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
r
o
w
s
 
=
 
a
r
r
a
y
(
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
c
o
m
p
o
n
e
n
t
A
r
g
s
[
 
'
p
r
o
p
e
r
t
y
_
u
i
d
'
 
]
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
p
r
o
p
e
r
t
y
_
u
i
d
 
=
 
$
c
o
m
p
o
n
e
n
t
A
r
g
s
[
 
'
p
r
o
p
e
r
t
y
_
u
i
d
'
 
]
;

 
 
 
 
 
 
 
 
}
 
e
l
s
e
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
p
r
o
p
e
r
t
y
_
u
i
d
 
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
p
r
o
p
e
r
t
y
_
u
i
d
'
,
 
0
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
R
O
P
E
R
T
Y
_
N
A
M
E
'
 
]
 
=
 
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
N
a
m
e
(
$
p
r
o
p
e
r
t
y
_
u
i
d
)
;


 
 
 
 
 
 
 
 
j
r
_
i
m
p
o
r
t
(
'
j
o
m
r
e
s
_
r
e
v
i
e
w
s
'
)
;

 
 
 
 
 
 
 
 
$
R
e
v
i
e
w
s
 
=
 
n
e
w
 
j
o
m
r
e
s
_
r
e
v
i
e
w
s
(
)
;

 
 
 
 
 
 
 
 
$
a
l
l
_
r
e
v
i
e
w
s
 
=
 
$
R
e
v
i
e
w
s
-
>
g
e
t
_
a
l
l
_
r
e
v
i
e
w
s
_
i
n
d
e
x
_
b
y
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
u
i
d
(
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
a
l
l
_
r
e
v
i
e
w
s
[
 
$
p
r
o
p
e
r
t
y
_
u
i
d
 
]
)
)
 
{

	
	
	
i
f
 
(
i
s
_
a
r
r
a
y
(
$
a
l
l
_
r
e
v
i
e
w
s
)
 
&
&
 
!
e
m
p
t
y
(
$
a
l
l
_
r
e
v
i
e
w
s
)
)
 
{

	
	
	
	
$
p
r
o
p
e
r
t
y
_
r
e
v
i
e
w
s
 
=
 
$
a
l
l
_
r
e
v
i
e
w
s
[
 
$
p
r
o
p
e
r
t
y
_
u
i
d
 
]
;

	
	
	
	
$
a
l
l
_
r
e
p
o
r
t
s
 
=
 
$
R
e
v
i
e
w
s
-
>
g
e
t
_
a
l
l
_
r
e
p
o
r
t
s
_
i
n
d
e
x
_
b
y
_
r
a
t
i
n
g
_
i
d
(
)
;

	
	
	
	
$
a
l
l
_
u
s
e
r
s
 
=
 
j
o
m
r
e
s
_
c
m
s
s
p
e
c
i
f
i
c
_
g
e
t
C
M
S
U
s
e
r
s
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
p
r
o
p
e
r
t
y
_
r
e
v
i
e
w
s
 
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
a
l
l
_
r
e
p
o
r
t
s
 
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
a
l
l
_
u
s
e
r
s
 
=
 
a
r
r
a
y
(
)
;

	
	
	
}


	
	
	
$
u
n
p
u
b
l
i
s
h
_
i
c
o
n
 
=
 
J
O
M
R
E
S
_
I
M
A
G
E
S
_
R
E
L
P
A
T
H
.
'
j
o
m
r
e
s
i
m
a
g
e
s
/
s
m
a
l
l
/
T
i
c
k
.
p
n
g
'
;

	
	
	
$
p
u
b
l
i
s
h
_
i
c
o
n
 
=
 
J
O
M
R
E
S
_
I
M
A
G
E
S
_
R
E
L
P
A
T
H
.
'
j
o
m
r
e
s
i
m
a
g
e
s
/
s
m
a
l
l
/
C
a
n
c
e
l
.
p
n
g
'
;

	
	
	
$
d
e
l
e
t
e
_
i
c
o
n
 
=
 
J
O
M
R
E
S
_
I
M
A
G
E
S
_
R
E
L
P
A
T
H
.
'
j
o
m
r
e
s
i
m
a
g
e
s
/
s
m
a
l
l
/
W
a
s
t
e
B
a
s
k
e
t
.
p
n
g
'
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
U
N
P
U
B
L
I
S
H
_
I
M
A
G
E
'
 
]
 
=
 
$
u
n
p
u
b
l
i
s
h
_
i
c
o
n
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
U
B
L
I
S
H
_
I
M
A
G
E
'
 
]
 
=
 
$
p
u
b
l
i
s
h
_
i
c
o
n
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
A
J
A
X
U
R
L
'
 
]
 
=
 
J
O
M
R
E
S
_
S
I
T
E
P
A
G
E
_
U
R
L
_
A
D
M
I
N
.
'
&
f
o
r
m
a
t
=
r
a
w
&
n
o
_
h
t
m
l
=
1
'
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
P
R
O
P
E
R
T
Y
_
U
I
D
'
 
]
 
=
 
$
p
r
o
p
e
r
t
y
_
u
i
d
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
R
E
V
I
E
W
S
_
A
D
M
I
N
_
P
U
B
L
I
S
H
R
E
V
I
E
W
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
R
E
V
I
E
W
S
_
A
D
M
I
N
_
P
U
B
L
I
S
H
R
E
V
I
E
W
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
R
E
V
I
E
W
S
_
A
D
M
I
N
_
P
U
B
L
I
S
H
R
E
V
I
E
W
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
R
E
V
I
E
W
S
_
A
D
M
I
N
_
D
E
L
E
T
E
R
E
V
E
I
E
W
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
R
E
V
I
E
W
S
_
A
D
M
I
N
_
D
E
L
E
T
E
R
E
V
E
I
E
W
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
R
E
V
I
E
W
S
_
A
D
M
I
N
_
D
E
L
E
T
E
R
E
V
E
I
E
W
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
M
R
_
A
U
D
I
T
_
L
I
S
T
I
N
G
_
U
S
E
R
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
M
R
_
A
U
D
I
T
_
L
I
S
T
I
N
G
_
U
S
E
R
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
M
R
_
A
U
D
I
T
_
L
I
S
T
I
N
G
_
U
S
E
R
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
R
E
V
I
E
W
S
_
S
U
B
M
I
T
T
E
D
D
A
T
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
R
E
V
I
E
W
S
_
S
U
B
M
I
T
T
E
D
D
A
T
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
R
E
V
I
E
W
S
_
S
U
B
M
I
T
T
E
D
D
A
T
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
_
J
O
M
R
E
S
_
R
E
V
I
E
W
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
_
J
O
M
R
E
S
_
R
E
V
I
E
W
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
_
J
O
M
R
E
S
_
R
E
V
I
E
W
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
_
J
O
M
R
E
S
_
R
E
V
I
E
W
S
_
R
E
V
I
E
W
B
O
D
Y
_
S
A
I
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
R
E
V
I
E
W
S
_
R
E
V
I
E
W
B
O
D
Y
_
S
A
I
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
R
E
V
I
E
W
S
_
R
E
V
I
E
W
B
O
D
Y
_
S
A
I
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
_
J
O
M
R
E
S
_
R
E
V
I
E
W
S
_
P
R
O
S
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
R
E
V
I
E
W
S
_
P
R
O
S
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
R
E
V
I
E
W
S
_
P
R
O
S
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
R
E
V
I
E
W
S
_
C
O
N
S
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
R
E
V
I
E
W
S
_
C
O
N
S
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
R
E
V
I
E
W
S
_
C
O
N
S
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
R
E
V
I
E
W
S
_
R
A
T
I
N
G
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
R
E
V
I
E
W
S
_
R
A
T
I
N
G
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
R
E
V
I
E
W
S
_
R
A
T
I
N
G
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
R
E
V
I
E
W
S
_
R
E
P
O
R
T
_
R
E
V
I
E
W
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
_
J
O
M
R
E
S
_
R
E
V
I
E
W
S
_
R
E
P
O
R
T
_
R
E
V
I
E
W
_
T
I
T
L
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
R
E
V
I
E
W
S
_
R
E
P
O
R
T
_
R
E
V
I
E
W
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
_
J
O
M
R
E
S
_
R
E
V
I
E
W
S
_
R
E
P
O
R
T
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
R
E
V
I
E
W
S
_
R
E
P
O
R
T
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
R
E
V
I
E
W
S
_
R
E
P
O
R
T
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
'
,
 
f
a
l
s
e
)
;


	
	
	
f
o
r
e
a
c
h
 
(
$
p
r
o
p
e
r
t
y
_
r
e
v
i
e
w
s
 
a
s
 
$
r
e
v
i
e
w
)
 
{

	
	
	
	
$
r
 
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
r
[
 
'
r
a
t
i
n
g
_
i
d
'
 
]
 
=
 
$
r
e
v
i
e
w
[
 
'
r
a
t
i
n
g
_
i
d
'
 
]
;

	
	
	
	
$
r
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
 
=
 
$
a
l
l
_
u
s
e
r
s
[
 
$
r
e
v
i
e
w
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
 
]
[
 
'
u
s
e
r
n
a
m
e
'
 
]
;

	
	
	
	
$
r
[
 
'
r
e
v
i
e
w
_
t
i
t
l
e
'
 
]
 
=
 
$
r
e
v
i
e
w
[
 
'
r
e
v
i
e
w
_
t
i
t
l
e
'
 
]
;

	
	
	
	
$
r
[
 
'
r
e
v
i
e
w
_
d
e
s
c
r
i
p
t
i
o
n
'
 
]
 
=
 
$
r
e
v
i
e
w
[
 
'
r
e
v
i
e
w
_
d
e
s
c
r
i
p
t
i
o
n
'
 
]
;

	
	
	
	
$
r
[
 
'
p
r
o
s
'
 
]
 
=
 
$
r
e
v
i
e
w
[
 
'
p
r
o
s
'
 
]
;

	
	
	
	
$
r
[
 
'
c
o
n
s
'
 
]
 
=
 
$
r
e
v
i
e
w
[
 
'
c
o
n
s
'
 
]
;

	
	
	
	
$
r
[
 
'
r
a
t
i
n
g
'
 
]
 
=
 
$
r
e
v
i
e
w
[
 
'
r
a
t
i
n
g
'
 
]
;

	
	
	
	
$
r
[
 
'
r
a
t
i
n
g
_
d
a
t
e
'
 
]
 
=
 
$
r
e
v
i
e
w
[
 
'
r
a
t
i
n
g
_
d
a
t
e
'
 
]
;

	
	
	
	
$
r
[
 
'
p
u
b
l
i
s
h
e
d
'
 
]
 
=
 
$
r
e
v
i
e
w
[
 
'
p
u
b
l
i
s
h
e
d
'
 
]
;


	
	
	
	
$
r
[
 
'
r
e
p
o
r
t
s
'
 
]
 
=
 
'
'
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
a
l
l
_
r
e
p
o
r
t
s
[
 
$
r
[
 
'
r
a
t
i
n
g
_
i
d
'
 
]
 
]
)
)
 
{

	
	
	
	
	
$
r
e
v
i
e
w
_
r
e
p
o
r
t
s
 
=
 
$
a
l
l
_
r
e
p
o
r
t
s
[
 
$
r
[
 
'
r
a
t
i
n
g
_
i
d
'
 
]
 
]
;

	
	
	
	
	
f
o
r
e
a
c
h
 
(
$
r
e
v
i
e
w
_
r
e
p
o
r
t
s
 
a
s
 
$
r
e
p
o
r
t
)
 
{

	
	
	
	
	
	
$
r
e
p
o
r
t
_
u
s
e
r
i
d
 
=
 
$
a
l
l
_
u
s
e
r
s
[
 
$
r
e
p
o
r
t
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
 
]
[
 
'
u
s
e
r
n
a
m
e
'
 
]
;

	
	
	
	
	
	
$
r
[
 
'
r
e
p
o
r
t
s
'
 
]
 
.
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
R
E
V
I
E
W
S
_
R
E
P
O
R
T
_
C
R
E
A
T
E
D
_
B
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
R
E
V
I
E
W
S
_
R
E
P
O
R
T
_
C
R
E
A
T
E
D
_
B
Y
'
,
 
f
a
l
s
e
)
.
$
r
e
p
o
r
t
_
u
s
e
r
i
d
.
'
 
'
.
$
r
e
p
o
r
t
[
 
'
r
e
p
o
r
t
_
d
a
t
e
'
 
]
.
'
<
b
r
/
>
'
.
$
r
e
p
o
r
t
[
 
'
r
e
p
o
r
t
'
 
]
;

	
	
	
	
	
}

	
	
	
	
}


	
	
	
	
$
r
[
 
'
p
u
b
l
i
s
h
_
i
c
o
n
'
 
]
 
=
 
$
u
n
p
u
b
l
i
s
h
_
i
c
o
n
;

	
	
	
	
i
f
 
(
$
r
[
 
'
p
u
b
l
i
s
h
e
d
'
 
]
 
=
=
 
0
)
 
{

	
	
	
	
	
$
r
[
 
'
p
u
b
l
i
s
h
_
i
c
o
n
'
 
]
 
=
 
$
p
u
b
l
i
s
h
_
i
c
o
n
;

	
	
	
	
}


	
	
	
	
$
r
[
 
'
d
e
l
e
t
e
_
i
c
o
n
'
 
]
 
=
 
$
d
e
l
e
t
e
_
i
c
o
n
;


	
	
	
	
$
r
[
 
'
r
o
w
_
i
d
'
 
]
 
=
 
'
r
a
t
i
n
g
_
i
d
'
.
$
r
[
 
'
r
a
t
i
n
g
_
i
d
'
 
]
;


	
	
	
	
$
r
o
w
s
[
 
]
 
=
 
$
r
;

	
	
	
}


	
	
	
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
A
D
M
I
N
I
S
T
R
A
T
O
R
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
v
i
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
r
e
v
i
e
w
s
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
a
d
d
R
o
w
s
(
'
r
o
w
s
'
,
 
$
r
o
w
s
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

