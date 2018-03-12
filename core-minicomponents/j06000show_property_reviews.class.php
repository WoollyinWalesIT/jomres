
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
0
6
0
0
0
s
h
o
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
 
t
r
u
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
s
h
o
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
0
S
H
O
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
_
R
E
V
I
E
W
S
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

	
	
	
	
	
	
a
r
r
a
y
(

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
'
a
r
g
u
m
e
n
t
'
 
=
>
 
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

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
'
a
r
g
_
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
0
S
H
O
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
R
G
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
U
I
D
'
,

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
'
a
r
g
_
e
x
a
m
p
l
e
'
 
=
>
 
'
1
'
,

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
)
,

	
	
	
	
	
	
a
r
r
a
y
(

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
'
a
r
g
u
m
e
n
t
'
 
=
>
 
'
r
e
v
i
e
w
s
_
l
i
m
i
t
'
,

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
'
a
r
g
_
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
0
S
H
O
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
_
R
E
V
I
E
W
S
_
L
I
M
I
T
'
,

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
'
a
r
g
_
e
x
a
m
p
l
e
'
 
=
>
 
'
3
'
,

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
)
,

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
)
,

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
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
t
h
i
s
-
>
r
e
t
V
a
l
s
 
=
 
'
'
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
d
a
t
a
_
o
n
l
y
 
=
 
f
a
l
s
e
;


 
 
 
 
 
 
 
 
$
t
a
s
k
 
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
t
a
s
k
'
,
 
'
'
)
;

	
	
$
m
o
d
a
l
_
w
r
a
p
 
=
 
(
i
n
t
)
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
m
o
d
a
l
_
w
r
a
p
'
,
 
0
)
;


 
 
 
 
 
 
 
 
$
j
u
s
t
_
a
d
d
e
d
 
=
 
0
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
G
E
T
[
 
'
j
a
'
 
]
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
j
u
s
t
_
a
d
d
e
d
 
=
 
(
i
n
t
)
 
$
_
G
E
T
[
 
'
j
a
'
 
]
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
 
(
i
n
t
)
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
 
(
i
n
t
)
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

	
	

	
	
i
f
 
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
 
=
=
 
0
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


 
 
 
 
 
 
 
 
i
f
 
(
!
u
s
e
r
_
c
a
n
_
v
i
e
w
_
t
h
i
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
o
u
t
p
u
t
_
n
o
w
'
 
]
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
o
u
t
p
u
t
_
n
o
w
 
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
o
u
t
p
u
t
_
n
o
w
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
o
u
t
p
u
t
_
n
o
w
 
=
 
t
r
u
e
;

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
i
f
 
(
(
i
n
t
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
u
s
e
_
r
e
v
i
e
w
s
'
 
]
 
=
=
 
0
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


 
 
 
 
 
 
 
 
$
c
u
r
r
e
n
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
d
e
t
a
i
l
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
b
a
s
i
c
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
d
e
t
a
i
l
s
'
)
;

 
 
 
 
 
 
 
 
$
c
u
r
r
e
n
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
d
e
t
a
i
l
s
-
>
g
a
t
h
e
r
_
d
a
t
a
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

 
 
 
 
 
 
 
 
$
t
h
i
s
_
u
s
e
r
_
c
a
n
_
r
e
v
i
e
w
 
=
 
f
a
l
s
e
;


 
 
 
 
 
 
 
 
$
i
t
e
m
R
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
i
t
e
m
R
a
t
i
n
g
 
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
'
,
 
f
a
l
s
e
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
V
E
R
A
G
E
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
A
V
E
R
A
G
E
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
A
V
E
R
A
G
E
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
O
T
A
L
_
V
O
T
E
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
T
O
T
A
L
_
V
O
T
E
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
T
O
T
A
L
_
V
O
T
E
S
'
,
 
f
a
l
s
e
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
N
U
M
B
E
R
_
A
G
R
E
E
_
W
I
T
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
N
U
M
B
E
R
_
A
G
R
E
E
_
W
I
T
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
N
U
M
B
E
R
_
A
G
R
E
E
_
W
I
T
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
N
U
M
B
E
R
_
D
I
S
A
G
R
E
E
_
W
I
T
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
N
U
M
B
E
R
_
D
I
S
A
G
R
E
E
_
W
I
T
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
N
U
M
B
E
R
_
D
I
S
A
G
R
E
E
_
W
I
T
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
H
A
N
K
S
_
F
O
R
_
C
O
N
F
I
R
M
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
H
A
N
K
S
_
F
O
R
_
C
O
N
F
I
R
M
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
H
A
N
K
S
_
F
O
R
_
C
O
N
F
I
R
M
'
,
 
f
a
l
s
e
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
L
R
E
A
D
Y
_
C
O
N
F
I
R
M
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
R
E
V
I
E
W
S
_
A
L
R
E
A
D
Y
_
C
O
N
F
I
R
M
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
R
E
V
I
E
W
S
_
A
L
R
E
A
D
Y
_
C
O
N
F
I
R
M
E
D
'
,
 
f
a
l
s
e
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
N
A
M
E
'
 
]
 
=
 
$
c
u
r
r
e
n
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
d
e
t
a
i
l
s
-
>
p
r
o
p
e
r
t
y
_
n
a
m
e
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
H
A
N
K
S
_
F
O
R
_
R
E
V
I
E
W
'
 
]
 
=
 
'
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
S
H
O
W
_
T
H
A
N
K
S
'
 
]
 
=
 
'
f
a
l
s
e
'
;

 
 
 
 
 
 
 
 
i
f
 
(
$
j
u
s
t
_
a
d
d
e
d
 
=
=
 
1
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
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
a
u
t
o
p
u
b
l
i
s
h
_
r
e
v
i
e
w
s
'
 
]
 
=
=
 
'
1
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
H
A
N
K
S
_
F
O
R
_
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
T
H
A
N
K
S
_
F
O
R
_
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
T
H
A
N
K
S
_
F
O
R
_
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
i
f
 
(
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
u
s
e
r
I
s
M
a
n
a
g
e
r
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
H
A
N
K
S
_
F
O
R
_
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
T
H
A
N
K
S
_
F
O
R
_
R
E
V
I
E
W
_
M
O
D
E
R
A
T
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
R
E
V
I
E
W
S
_
T
H
A
N
K
S
_
F
O
R
_
R
E
V
I
E
W
_
M
O
D
E
R
A
T
E
D
'
,
 
f
a
l
s
e
,
 
f
a
l
s
e
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
C
L
A
S
S
'
 
]
 
=
 
'
u
i
-
s
t
a
t
e
-
h
i
g
h
l
i
g
h
t
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
S
H
O
W
_
T
H
A
N
K
S
'
 
]
 
=
 
'
t
r
u
e
'
;

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
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
R
e
v
i
e
w
s
-
>
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
t
h
i
s
_
u
s
e
r
_
c
a
n
_
r
e
v
i
e
w
_
t
h
i
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
t
h
i
s
_
u
s
e
r
_
c
a
n
_
r
e
v
i
e
w
_
t
h
i
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
(
)
;

 
 
 
 
 
 
 
 
$
i
t
e
m
R
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
s
h
o
w
R
e
v
i
e
w
s
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

 
 
 
 
 
 
 
 
$
i
t
e
m
R
a
t
i
n
g
 
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
s
h
o
w
R
a
t
i
n
g
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

 
 
 
 
 
 
 
 
$
t
h
i
s
_
u
s
e
r
_
c
a
n
_
r
e
v
i
e
w
 
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
t
h
i
s
_
u
s
e
r
_
c
a
n
_
r
e
v
i
e
w
(
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
J
A
X
;


 
 
 
 
 
 
 
 
$
t
h
u
m
b
_
u
p
 
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
t
h
u
m
b
_
u
p
.
p
n
g
'
;

 
 
 
 
 
 
 
 
$
t
h
u
m
b
_
d
o
w
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
t
h
u
m
b
_
d
o
w
n
.
p
n
g
'
;

 
 
 
 
 
 
 
 
$
s
t
a
r
 
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
s
t
a
r
.
p
n
g
'
;

 
 
 
 
 
 
 
 
$
a
d
d
_
r
e
v
i
e
w
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
a
d
d
_
r
e
v
i
e
w
.
p
n
g
'
;


 
 
 
 
 
 
 
 
i
f
 
(
$
t
h
i
s
_
u
s
e
r
_
c
a
n
_
r
e
v
i
e
w
_
t
h
i
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
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
u
r
l
 
=
 
j
o
m
r
e
s
U
R
L
(
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
.
'
&
t
a
s
k
=
a
d
d
_
r
e
v
i
e
w
&
a
m
p
;
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
'
.
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
D
_
R
E
V
I
E
W
'
 
]
 
=
 
'
<
d
i
v
 
c
l
a
s
s
=
"
a
l
i
g
n
-
c
e
n
t
e
r
"
>
<
a
 
h
r
e
f
 
=
 
"
'
.
$
u
r
l
.
'
"
 
c
l
a
s
s
=
"
b
t
n
 
b
t
n
-
p
r
i
m
a
r
y
"
>
<
i
 
c
l
a
s
s
=
"
i
c
o
n
-
p
l
u
s
 
i
c
o
n
-
w
h
i
t
e
"
>
<
/
i
>
 
'
.
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
D
_
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
D
_
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
,
 
f
a
l
s
e
)
.
'
<
/
a
>
<
/
d
i
v
>
'
;

 
 
 
 
 
 
 
 
}
 
e
l
s
e
 
{

 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
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
u
s
e
r
I
s
R
e
g
i
s
t
e
r
e
d
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
D
_
R
E
V
I
E
W
'
 
]
 
=
 
'
<
d
i
v
 
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
i
n
f
o
"
>
'
.
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
D
_
R
E
V
I
E
W
_
N
O
T
L
O
G
G
E
D
I
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
D
_
R
E
V
I
E
W
_
N
O
T
L
O
G
G
E
D
I
N
'
,
 
f
a
l
s
e
,
 
f
a
l
s
e
)
.
'
<
/
d
i
v
>
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
u
s
e
r
I
s
M
a
n
a
g
e
r
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
D
_
R
E
V
I
E
W
'
 
]
 
=
 
'
<
d
i
v
 
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
"
>
'
.
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
L
R
E
A
D
Y
R
E
V
I
E
W
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
R
E
V
I
E
W
S
_
A
L
R
E
A
D
Y
R
E
V
I
E
W
E
D
'
,
 
f
a
l
s
e
,
 
f
a
l
s
e
)
.
'
<
/
d
i
v
>
'
;

 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
i
f
 
(
$
i
t
e
m
R
e
v
i
e
w
s
[
 
'
t
o
t
a
l
R
o
w
s
'
 
]
 
>
 
0
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
A
V
E
R
A
G
E
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
 
n
u
m
b
e
r
_
f
o
r
m
a
t
(
$
i
t
e
m
R
a
t
i
n
g
[
 
'
a
v
g
_
r
a
t
i
n
g
'
 
]
,
 
1
,
 
'
.
'
,
 
'
'
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
N
U
M
B
E
R
_
O
F
_
R
E
V
I
E
W
S
'
 
]
 
=
 
$
i
t
e
m
R
a
t
i
n
g
[
 
'
c
o
u
n
t
e
r
'
 
]
;

 
 
 
 
 
 
 
 
 
 
 
 
$
s
i
t
e
_
u
s
e
r
i
d
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

 
 
 
 
 
 
 
 
 
 
 
 
$
r
e
v
i
e
w
_
d
e
t
a
i
l
s
 
=
 
$
i
t
e
m
R
e
v
i
e
w
s
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
e
t
a
i
l
s
'
 
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
i
t
e
m
R
e
v
i
e
w
s
[
 
'
f
i
e
l
d
s
'
 
]
 
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
I
A
G
R
E
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
I
A
G
R
E
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
I
A
G
R
E
E
'
,
 
f
a
l
s
e
,
 
f
a
l
s
e
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
r
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
I
D
I
S
A
G
R
E
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
I
D
I
S
A
G
R
E
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
I
D
I
S
A
G
R
E
E
'
,
 
f
a
l
s
e
,
 
f
a
l
s
e
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
r
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
,
 
f
a
l
s
e
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
r
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
,
 
f
a
l
s
e
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
r
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
,
 
f
a
l
s
e
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
r
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
,
 
f
a
l
s
e
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
r
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
,
 
f
a
l
s
e
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
r
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
,
 
f
a
l
s
e
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
r
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
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
r
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
'
,
 
f
a
l
s
e
,
 
f
a
l
s
e
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
r
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
E
D
_
B
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
V
I
E
W
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
,
 
f
a
l
s
e
)
;


 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
r
[
 
'
R
A
T
I
N
G
_
I
D
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
U
S
E
R
N
A
M
E
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
s
i
t
e
_
u
s
e
r
i
d
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
)
)
 
{

	
	
	
	
	
$
r
[
 
'
U
S
E
R
N
A
M
E
'
 
]
 
=
 
$
s
i
t
e
_
u
s
e
r
i
d
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

	
	
	
	
}

	
	
	
	

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
r
[
 
'
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
R
E
V
I
E
W
_
D
E
S
C
R
I
P
T
I
O
N
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
P
R
O
S
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
C
O
N
S
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
R
A
T
I
N
G
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
R
A
T
I
N
G
_
S
T
A
R
S
'
 
]
 
=
 
'
'
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
f
o
r
 
(
$
i
 
=
 
1
;
 
$
i
 
<
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
 
+
+
$
i
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
r
[
 
'
R
A
T
I
N
G
_
S
T
A
R
S
'
 
]
 
.
=
 
'
<
i
m
g
 
s
r
c
=
"
'
.
$
s
t
a
r
.
'
"
/
>
'
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
r
[
 
'
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
L
I
N
K
'
 
]
 
=
 
'
'
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
/
/
i
f
 
(
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
u
s
e
r
I
s
R
e
g
i
s
t
e
r
e
d
)

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
/
/
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
r
[
 
'
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
L
I
N
K
'
 
]
 
=
 
'
<
a
 
h
r
e
f
=
"
'
.
j
o
m
r
e
s
U
R
L
(
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
.
'
&
t
a
s
k
=
r
e
p
o
r
t
_
r
e
v
i
e
w
&
a
m
p
;
r
a
t
i
n
g
_
i
d
=
'
.
$
r
[
 
'
R
A
T
I
N
G
_
I
D
'
 
]
)
.
'
"
>
'
.
$
r
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
'
 
]
.
'
<
/
a
>
'
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
r
[
 
'
R
E
P
O
R
T
_
U
R
L
'
 
]
 
=
 
j
o
m
r
e
s
U
R
L
(
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
.
'
&
t
a
s
k
=
r
e
p
o
r
t
_
r
e
v
i
e
w
&
a
m
p
;
r
a
t
i
n
g
_
i
d
=
'
.
$
r
[
 
'
R
A
T
I
N
G
_
I
D
'
 
]
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
r
[
 
'
R
E
P
O
R
T
_
T
E
X
T
'
 
]
 
=
 
$
r
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
'
 
]
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
/
/
}


 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
r
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
 
$
c
u
r
r
e
n
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
d
e
t
a
i
l
s
-
>
p
r
o
p
e
r
t
y
_
n
a
m
e
;


 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
c
o
n
f
i
r
m
_
s
t
a
t
e
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
s
h
o
w
C
o
n
f
i
r
m
(
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
)
;


 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
r
a
t
i
n
g
_
d
e
t
a
i
l
 
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
a
r
r
a
y
_
k
e
y
_
e
x
i
s
t
s
(
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
,
 
$
r
e
v
i
e
w
_
d
e
t
a
i
l
s
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
r
e
v
i
e
w
_
d
e
t
a
i
l
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
_
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
_
1
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
_
1
'
,
 
f
a
l
s
e
,
 
f
a
l
s
e
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
r
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
_
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
_
2
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
_
2
'
,
 
f
a
l
s
e
,
 
f
a
l
s
e
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
r
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
_
3
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
_
3
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
_
3
'
,
 
f
a
l
s
e
,
 
f
a
l
s
e
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
r
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
_
4
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
_
4
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
_
4
'
,
 
f
a
l
s
e
,
 
f
a
l
s
e
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
r
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
_
5
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
_
5
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
_
5
'
,
 
f
a
l
s
e
,
 
f
a
l
s
e
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
r
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
_
6
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
_
6
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
_
6
'
,
 
f
a
l
s
e
,
 
f
a
l
s
e
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
1
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
_
d
e
t
a
i
l
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
[
 
0
 
]
.
'
/
1
0
'
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
1
_
p
e
r
c
e
n
t
a
g
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
_
d
e
t
a
i
l
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
[
 
0
 
]
 
*
 
'
1
0
'
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
1
_
p
r
o
g
r
e
s
s
b
a
r
_
c
o
l
o
u
r
'
 
]
 
=
 
c
a
l
c
_
r
a
t
i
n
g
_
p
r
o
g
r
e
s
s
b
a
r
_
c
o
l
o
u
r
(
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
1
_
p
e
r
c
e
n
t
a
g
e
'
 
]
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
2
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
_
d
e
t
a
i
l
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
[
 
1
 
]
.
'
/
1
0
'
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
2
_
p
e
r
c
e
n
t
a
g
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
_
d
e
t
a
i
l
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
[
 
1
 
]
 
*
 
'
1
0
'
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
2
_
p
r
o
g
r
e
s
s
b
a
r
_
c
o
l
o
u
r
'
 
]
 
=
 
c
a
l
c
_
r
a
t
i
n
g
_
p
r
o
g
r
e
s
s
b
a
r
_
c
o
l
o
u
r
(
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
2
_
p
e
r
c
e
n
t
a
g
e
'
 
]
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
3
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
_
d
e
t
a
i
l
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
[
 
2
 
]
.
'
/
1
0
'
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
3
_
p
e
r
c
e
n
t
a
g
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
_
d
e
t
a
i
l
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
[
 
2
 
]
 
*
 
'
1
0
'
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
3
_
p
r
o
g
r
e
s
s
b
a
r
_
c
o
l
o
u
r
'
 
]
 
=
 
c
a
l
c
_
r
a
t
i
n
g
_
p
r
o
g
r
e
s
s
b
a
r
_
c
o
l
o
u
r
(
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
3
_
p
e
r
c
e
n
t
a
g
e
'
 
]
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
4
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
_
d
e
t
a
i
l
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
[
 
3
 
]
.
'
/
1
0
'
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
4
_
p
e
r
c
e
n
t
a
g
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
_
d
e
t
a
i
l
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
[
 
3
 
]
 
*
 
'
1
0
'
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
4
_
p
r
o
g
r
e
s
s
b
a
r
_
c
o
l
o
u
r
'
 
]
 
=
 
c
a
l
c
_
r
a
t
i
n
g
_
p
r
o
g
r
e
s
s
b
a
r
_
c
o
l
o
u
r
(
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
4
_
p
e
r
c
e
n
t
a
g
e
'
 
]
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
5
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
_
d
e
t
a
i
l
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
[
 
4
 
]
.
'
/
1
0
'
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
5
_
p
e
r
c
e
n
t
a
g
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
_
d
e
t
a
i
l
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
[
 
4
 
]
 
*
 
'
1
0
'
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
5
_
p
r
o
g
r
e
s
s
b
a
r
_
c
o
l
o
u
r
'
 
]
 
=
 
c
a
l
c
_
r
a
t
i
n
g
_
p
r
o
g
r
e
s
s
b
a
r
_
c
o
l
o
u
r
(
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
5
_
p
e
r
c
e
n
t
a
g
e
'
 
]
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
6
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
_
d
e
t
a
i
l
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
[
 
5
 
]
.
'
/
1
0
'
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
6
_
p
e
r
c
e
n
t
a
g
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
_
d
e
t
a
i
l
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
[
 
5
 
]
 
*
 
'
1
0
'
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
6
_
p
r
o
g
r
e
s
s
b
a
r
_
c
o
l
o
u
r
'
 
]
 
=
 
c
a
l
c
_
r
a
t
i
n
g
_
p
r
o
g
r
e
s
s
b
a
r
_
c
o
l
o
u
r
(
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
6
_
p
e
r
c
e
n
t
a
g
e
'
 
]
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
/
/
i
f
 
(
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
R
e
v
i
e
w
s
-
>
i
p
,
$
c
o
n
f
i
r
m
_
s
t
a
t
e
s
[
'
c
o
n
f
i
r
m
_
i
p
s
'
]
)
 
&
&
 
$
t
h
i
s
_
u
s
e
r
_
c
a
n
_
r
e
v
i
e
w
)


 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
$
c
o
n
f
i
r
m
_
s
t
a
t
e
s
[
 
'
a
g
r
e
e
'
 
]
 
!
=
 
0
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
r
[
 
'
N
U
M
B
E
R
_
A
G
R
E
E
'
 
]
 
=
 
$
c
o
n
f
i
r
m
_
s
t
a
t
e
s
[
 
'
a
g
r
e
e
'
 
]
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
$
c
o
n
f
i
r
m
_
s
t
a
t
e
s
[
 
'
a
g
r
e
e
'
 
]
 
=
=
 
1
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
r
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
N
U
M
B
E
R
_
A
G
R
E
E
_
W
I
T
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
N
U
M
B
E
R
_
A
G
R
E
E
_
W
I
T
H
R
E
V
I
E
W
_
S
I
N
G
U
L
A
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
R
E
V
I
E
W
S
_
N
U
M
B
E
R
_
A
G
R
E
E
_
W
I
T
H
R
E
V
I
E
W
_
S
I
N
G
U
L
A
R
'
,
 
f
a
l
s
e
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
r
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
N
U
M
B
E
R
_
A
G
R
E
E
_
W
I
T
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
N
U
M
B
E
R
_
A
G
R
E
E
_
W
I
T
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
N
U
M
B
E
R
_
A
G
R
E
E
_
W
I
T
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
,
 
f
a
l
s
e
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
r
[
 
'
N
U
M
B
E
R
_
A
G
R
E
E
'
 
]
 
=
 
'
0
'
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
r
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
N
U
M
B
E
R
_
A
G
R
E
E
_
W
I
T
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
N
U
M
B
E
R
_
A
G
R
E
E
_
W
I
T
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
N
U
M
B
E
R
_
A
G
R
E
E
_
W
I
T
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
,
 
f
a
l
s
e
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
$
c
o
n
f
i
r
m
_
s
t
a
t
e
s
[
 
'
d
i
s
a
g
r
e
e
'
 
]
 
!
=
 
0
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
r
[
 
'
N
U
M
B
E
R
_
D
I
S
A
G
R
E
E
'
 
]
 
=
 
$
c
o
n
f
i
r
m
_
s
t
a
t
e
s
[
 
'
d
i
s
a
g
r
e
e
'
 
]
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
$
c
o
n
f
i
r
m
_
s
t
a
t
e
s
[
 
'
d
i
s
a
g
r
e
e
'
 
]
 
=
=
 
1
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
r
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
N
U
M
B
E
R
_
D
I
S
A
G
R
E
E
_
W
I
T
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
N
U
M
B
E
R
_
D
I
S
A
G
R
E
E
_
W
I
T
H
R
E
V
I
E
W
_
S
I
N
G
U
L
A
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
R
E
V
I
E
W
S
_
N
U
M
B
E
R
_
D
I
S
A
G
R
E
E
_
W
I
T
H
R
E
V
I
E
W
_
S
I
N
G
U
L
A
R
'
,
 
f
a
l
s
e
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
r
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
N
U
M
B
E
R
_
D
I
S
A
G
R
E
E
_
W
I
T
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
N
U
M
B
E
R
_
D
I
S
A
G
R
E
E
_
W
I
T
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
N
U
M
B
E
R
_
D
I
S
A
G
R
E
E
_
W
I
T
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
,
 
f
a
l
s
e
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
r
[
 
'
N
U
M
B
E
R
_
D
I
S
A
G
R
E
E
'
 
]
 
=
 
'
0
'
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
r
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
N
U
M
B
E
R
_
D
I
S
A
G
R
E
E
_
W
I
T
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
N
U
M
B
E
R
_
D
I
S
A
G
R
E
E
_
W
I
T
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
N
U
M
B
E
R
_
D
I
S
A
G
R
E
E
_
W
I
T
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
,
 
f
a
l
s
e
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
/
/
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
R
e
v
i
e
w
s
-
>
i
p
,
$
c
o
n
f
i
r
m
_
s
t
a
t
e
s
[
'
c
o
n
f
i
r
m
_
i
p
s
'
]
)
 
&
&
 
$
t
h
i
s
_
u
s
e
r
_
c
a
n
_
r
e
v
i
e
w
)

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
/
/
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
r
[
 
'
T
H
U
M
B
_
U
P
'
 
]
 
=
 
'
<
a
 
h
r
e
f
 
=
"
j
a
v
a
s
c
r
i
p
t
:
v
o
i
d
(
0
)
;
"
 
t
i
t
l
e
=
"
'
.
$
r
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
I
A
G
R
E
E
'
 
]
.
'
"
 
 
o
n
C
l
i
c
k
=
"
c
o
n
f
i
r
m
_
r
e
v
i
e
w
(
'
.
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
.
'
,
1
)
;
"
 
c
l
a
s
s
=
"
b
t
n
 
b
t
n
"
>
<
i
m
g
 
s
r
c
=
"
'
.
$
t
h
u
m
b
_
u
p
.
'
"
 
w
i
d
t
h
=
"
1
4
"
 
h
e
i
g
h
t
=
"
1
4
"
/
>
 
'
.
$
r
[
 
'
N
U
M
B
E
R
_
A
G
R
E
E
'
 
]
.
'
<
/
a
>
'
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
r
[
 
'
T
H
U
M
B
_
D
O
W
N
'
 
]
 
=
 
'
<
a
 
h
r
e
f
 
=
"
j
a
v
a
s
c
r
i
p
t
:
v
o
i
d
(
0
)
;
"
 
t
i
t
l
e
=
"
'
.
$
r
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
I
D
I
S
A
G
R
E
E
'
 
]
.
'
"
 
 
o
n
C
l
i
c
k
=
"
c
o
n
f
i
r
m
_
r
e
v
i
e
w
(
'
.
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
.
'
,
0
)
;
"
 
c
l
a
s
s
=
"
b
t
n
"
>
<
i
m
g
 
s
r
c
=
"
'
.
$
t
h
u
m
b
_
d
o
w
n
.
'
"
 
w
i
d
t
h
=
"
1
4
"
 
h
e
i
g
h
t
=
"
1
4
"
/
>
 
'
.
$
r
[
 
'
N
U
M
B
E
R
_
D
I
S
A
G
R
E
E
'
 
]
.
'
<
/
a
>
'
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
/
/
}


 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
r
[
 
'
R
A
T
I
N
G
_
D
A
T
E
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


 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
/
/
 
R
a
t
i
n
g
 
S
c
h
e
m
a


 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
r
[
 
'
R
A
T
I
N
G
_
D
A
T
E
_
M
E
T
A
'
 
]
 
=
 
d
a
t
e
(
'
Y
-
m
-
d
'
,
 
s
t
r
t
o
t
i
m
e
(
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
)
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
r
[
 
'
R
A
T
I
N
G
_
S
C
H
E
M
A
_
W
O
R
S
T
R
A
T
I
N
G
'
 
]
 
=
 
m
i
n
(
$
r
e
v
i
e
w
_
d
e
t
a
i
l
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
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
r
[
 
'
R
A
T
I
N
G
_
S
C
H
E
M
A
_
B
E
S
T
R
A
T
I
N
G
'
 
]
 
=
 
m
a
x
(
$
r
e
v
i
e
w
_
d
e
t
a
i
l
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
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
s
u
m
 
=
 
a
r
r
a
y
_
s
u
m
(
$
r
e
v
i
e
w
_
d
e
t
a
i
l
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
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
c
o
u
n
t
 
=
 
c
o
u
n
t
(
$
r
e
v
i
e
w
_
d
e
t
a
i
l
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
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
r
[
 
'
R
A
T
I
N
G
_
S
C
H
E
M
A
_
R
A
T
I
N
G
V
A
L
U
E
'
 
]
 
=
 
$
s
u
m
 
/
 
$
c
o
u
n
t
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
R
E
Q
U
E
S
T
[
'
r
e
v
i
e
w
s
_
l
i
m
i
t
'
]
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
r
e
v
i
e
w
s
_
l
i
m
i
t
'
 
]
)
)
 
{

	
	
	
	
	
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
r
e
v
i
e
w
s
_
l
i
m
i
t
'
 
]
 
=
 
2
;

	
	
	
	
}

	
	
	
	
$
r
e
v
i
e
w
s
_
l
i
m
i
t
 
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
r
e
v
i
e
w
s
_
l
i
m
i
t
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
r
e
v
i
e
w
s
_
l
i
m
i
t
 
=
 
(
i
n
t
)
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
r
e
v
i
e
w
s
_
l
i
m
i
t
'
,
 
0
)
;

	
	
	
}


	
	
	
$
s
h
o
w
a
l
l
 
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
s
h
o
w
_
f
u
l
l
p
a
g
e
_
l
i
n
k
 
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
 
$
r
e
v
i
e
w
s
_
l
i
m
i
t
 
<
 
c
o
u
n
t
(
$
r
o
w
s
)
 
)
 
{

	
	
	
	

	
	
	
	
$
s
h
o
w
a
l
l
[
]
 
=
 
a
r
r
a
y
 
(
 

	
	
	
	
	
"
T
E
X
T
"
 
=
>
 
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
P
O
R
T
A
L
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
H
O
W
_
A
L
L
_
R
E
V
I
E
W
S
'
,
 
'
P
O
R
T
A
L
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
H
O
W
_
A
L
L
_
R
E
V
I
E
W
S
'
,
 
f
a
l
s
e
,
 
f
a
l
s
e
)
 
,

	
	
	
	
	
"
L
I
N
K
"
 
=
>
 
j
o
m
r
e
s
U
R
L
(
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
.
"
&
t
a
s
k
=
s
h
o
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
&
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
"
.
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
.
"
&
r
e
v
i
e
w
s
_
l
i
m
i
t
=
"
.
 
c
o
u
n
t
(
$
r
o
w
s
)
)
 

	
	
	
	
	
)
;

	
	
	
}


	
	
	
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
_
s
l
i
c
e
(
$
r
o
w
s
,
 
0
,
 
$
r
e
v
i
e
w
s
_
l
i
m
i
t
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
a
d
d
R
o
w
s
(
'
s
h
o
w
a
l
l
'
,
 
$
s
h
o
w
a
l
l
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
F
R
O
N
T
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
s
h
o
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
h
i
s
-
>
r
e
t
V
a
l
s
 
=
 
$
t
m
p
l
-
>
g
e
t
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
N
O
R
E
V
I
E
W
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
N
O
R
E
V
I
E
W
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
N
O
R
E
V
I
E
W
S
'
,
 
f
a
l
s
e
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
N
O
R
E
V
I
E
W
S
_
B
E
T
H
E
F
I
R
S
T
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
N
O
R
E
V
I
E
W
S
_
B
E
T
H
E
F
I
R
S
T
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
N
O
R
E
V
I
E
W
S
_
B
E
T
H
E
F
I
R
S
T
'
,
 
f
a
l
s
e
,
 
f
a
l
s
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
F
R
O
N
T
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
o
_
r
e
v
i
e
w
s
_
y
e
t
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
h
i
s
-
>
r
e
t
V
a
l
s
 
=
 
$
t
m
p
l
-
>
g
e
t
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

 
 
 
 
 
 
 
 
i
f
 
(
$
o
u
t
p
u
t
_
n
o
w
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
e
c
h
o
 
$
t
h
i
s
-
>
r
e
t
V
a
l
s
;

 
 
 
 
 
 
 
 
}

 
 
 
 
}


 
 
 
 
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
 
t
o
u
c
h
_
t
e
m
p
l
a
t
e
_
l
a
n
g
u
a
g
e
(
)

 
 
 
 
{

 
 
 
 
 
 
 
 
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
o
u
t
p
u
t
[
 
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
'
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
D
A
T
E
'
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
N
O
R
E
V
I
E
W
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
N
O
R
E
V
I
E
W
S
'
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
N
O
R
E
V
I
E
W
S
_
B
E
T
H
E
F
I
R
S
T
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
N
O
R
E
V
I
E
W
S
_
B
E
T
H
E
F
I
R
S
T
'
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
N
O
R
E
V
I
E
W
S
_
B
E
T
H
E
F
I
R
S
T
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
N
O
R
E
V
I
E
W
S
_
B
E
T
H
E
F
I
R
S
T
'
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
I
A
G
R
E
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
I
A
G
R
E
E
'
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
I
D
I
S
A
G
R
E
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
I
D
I
S
A
G
R
E
E
'
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
V
E
R
A
G
E
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
A
V
E
R
A
G
E
_
R
A
T
I
N
G
'
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
O
T
A
L
_
V
O
T
E
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
T
O
T
A
L
_
V
O
T
E
S
'
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
D
_
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
D
_
R
E
V
I
E
W
'
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
'
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
L
R
E
A
D
Y
R
E
V
I
E
W
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
R
E
V
I
E
W
S
_
A
L
R
E
A
D
Y
R
E
V
I
E
W
E
D
'
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
A
N
N
O
T
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
C
A
N
N
O
T
R
E
V
I
E
W
'
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
N
U
M
B
E
R
_
A
G
R
E
E
_
W
I
T
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
N
U
M
B
E
R
_
A
G
R
E
E
_
W
I
T
H
R
E
V
I
E
W
'
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
N
U
M
B
E
R
_
D
I
S
A
G
R
E
E
_
W
I
T
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
N
U
M
B
E
R
_
D
I
S
A
G
R
E
E
_
W
I
T
H
R
E
V
I
E
W
'
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
N
U
M
B
E
R
_
A
G
R
E
E
_
W
I
T
H
R
E
V
I
E
W
_
S
I
N
G
U
L
A
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
R
E
V
I
E
W
S
_
N
U
M
B
E
R
_
A
G
R
E
E
_
W
I
T
H
R
E
V
I
E
W
_
S
I
N
G
U
L
A
R
'
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
N
U
M
B
E
R
_
D
I
S
A
G
R
E
E
_
W
I
T
H
R
E
V
I
E
W
_
S
I
N
G
U
L
A
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
R
E
V
I
E
W
S
_
N
U
M
B
E
R
_
D
I
S
A
G
R
E
E
_
W
I
T
H
R
E
V
I
E
W
_
S
I
N
G
U
L
A
R
'
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
H
A
N
K
S
_
F
O
R
_
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
T
H
A
N
K
S
_
F
O
R
_
R
E
V
I
E
W
'
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
H
A
N
K
S
_
F
O
R
_
C
O
N
F
I
R
M
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
H
A
N
K
S
_
F
O
R
_
C
O
N
F
I
R
M
'
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
L
R
E
A
D
Y
_
C
O
N
F
I
R
M
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
R
E
V
I
E
W
S
_
A
L
R
E
A
D
Y
_
C
O
N
F
I
R
M
E
D
'
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
M
P
L
E
T
E
A
L
L
F
I
E
L
D
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
M
P
L
E
T
E
A
L
L
F
I
E
L
D
S
'
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
D
R
E
V
I
E
W
_
E
R
R
O
R
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
A
D
D
R
E
V
I
E
W
_
E
R
R
O
R
_
T
I
T
L
E
'
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
D
R
E
V
I
E
W
_
E
R
R
O
R
_
D
E
S
C
R
I
P
T
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
D
R
E
V
I
E
W
_
E
R
R
O
R
_
D
E
S
C
R
I
P
T
I
O
N
'
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
D
R
E
V
I
E
W
_
E
R
R
O
R
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
A
D
D
R
E
V
I
E
W
_
E
R
R
O
R
_
P
R
O
S
'
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
D
R
E
V
I
E
W
_
E
R
R
O
R
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
A
D
D
R
E
V
I
E
W
_
E
R
R
O
R
_
C
O
N
S
'
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
D
R
E
V
I
E
W
_
E
R
R
O
R
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
A
D
D
R
E
V
I
E
W
_
E
R
R
O
R
_
R
A
T
I
N
G
'
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
D
R
E
V
I
E
W
_
S
U
M
M
A
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
D
R
E
V
I
E
W
_
S
U
M
M
A
R
Y
'
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
D
R
E
V
I
E
W
_
M
O
R
E
D
E
T
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
D
R
E
V
I
E
W
_
M
O
R
E
D
E
T
A
I
L
'
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
'
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
M
O
R
E
D
E
T
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
M
O
R
E
D
E
T
A
I
L
'
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
'
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
D
_
R
E
V
I
E
W
_
N
O
T
L
O
G
G
E
D
I
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
D
_
R
E
V
I
E
W
_
N
O
T
L
O
G
G
E
D
I
N
'
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
L
I
C
K
T
O
S
H
O
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
C
L
I
C
K
T
O
S
H
O
W
'
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
_
1
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
_
1
'
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
_
2
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
_
2
'
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
_
3
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
_
3
'
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
_
4
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
_
4
'
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
_
5
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
_
5
'
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
_
6
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
_
6
'
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
V
I
E
W
E
D
_
B
Y
'
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
o
u
t
p
u
t
 
a
s
 
$
o
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
e
c
h
o
 
$
o
;

 
 
 
 
 
 
 
 
 
 
 
 
e
c
h
o
 
'
<
b
r
/
>
'
;

 
 
 
 
 
 
 
 
}

 
 
 
 
}


 
 
 
 
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
 
$
t
h
i
s
-
>
r
e
t
V
a
l
s
;

 
 
 
 
}

}

