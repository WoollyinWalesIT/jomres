
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
5
o
a
u
t
h
_
e
d
i
t
_
c
l
i
e
n
t

	
{

	
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
e
P
o
i
n
t
F
i
l
e
p
a
t
h
=
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
e
P
o
i
n
t
F
i
l
e
p
a
t
h
'
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
a
v
a
i
l
a
b
l
e
_
s
c
o
p
e
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
a
v
a
i
l
a
b
l
e
_
s
c
o
p
e
s
 
=
 
a
r
r
a
y
 
(
 
"
u
s
e
r
"
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

	
	
	
$
a
v
a
i
l
a
b
l
e
_
s
c
o
p
e
s
 
=
 
a
r
r
a
y
 
(
 
"
u
s
e
r
"
 
,
 
"
m
a
n
a
g
e
r
"
 
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
 
&
&
 
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

	
	
	
$
a
v
a
i
l
a
b
l
e
_
s
c
o
p
e
s
 
=
 
a
r
r
a
y
 
(
 
"
u
s
e
r
"
 
,
 
"
m
a
n
a
g
e
r
"
 
,
 
"
s
u
p
e
r
"
 
)
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
"
j
o
m
r
e
s
_
o
a
u
t
h
_
s
c
o
p
e
s
"
)
;

	
	
$
s
c
o
p
e
s
_
c
l
a
s
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
o
a
u
t
h
_
s
c
o
p
e
s
(
$
e
P
o
i
n
t
F
i
l
e
p
a
t
h
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
,
 
"
"
 
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
O
A
U
T
H
_
A
P
P
S
'
,
 
'
_
O
A
U
T
H
_
A
P
P
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
O
A
U
T
H
_
A
P
I
K
E
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
O
A
U
T
H
_
A
P
I
K
E
Y
'
,
 
'
_
O
A
U
T
H
_
A
P
I
K
E
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
_
O
A
U
T
H
_
S
E
C
R
E
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
O
A
U
T
H
_
S
E
C
R
E
T
'
,
 
'
_
O
A
U
T
H
_
S
E
C
R
E
T
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
O
A
U
T
H
_
R
E
D
I
R
E
C
T
_
U
R
I
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
O
A
U
T
H
_
R
E
D
I
R
E
C
T
_
U
R
I
'
,
 
'
_
O
A
U
T
H
_
R
E
D
I
R
E
C
T
_
U
R
I
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
O
A
U
T
H
_
S
C
O
P
E
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
O
A
U
T
H
_
S
C
O
P
E
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
O
A
U
T
H
_
S
C
O
P
E
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
O
A
U
T
H
_
I
D
E
N
T
I
F
I
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
O
A
U
T
H
_
I
D
E
N
T
I
F
I
E
R
'
,
 
'
_
O
A
U
T
H
_
I
D
E
N
T
I
F
I
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
O
A
U
T
H
_
C
L
I
E
N
T
_
I
D
_
I
N
F
O
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
O
A
U
T
H
_
C
L
I
E
N
T
_
I
D
_
I
N
F
O
'
,
 
'
_
O
A
U
T
H
_
C
L
I
E
N
T
_
I
D
_
I
N
F
O
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
O
A
U
T
H
_
I
D
E
N
T
I
F
I
E
R
_
P
L
A
C
E
H
O
L
D
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
O
A
U
T
H
_
I
D
E
N
T
I
F
I
E
R
_
P
L
A
C
E
H
O
L
D
E
R
'
,
 
'
_
O
A
U
T
H
_
I
D
E
N
T
I
F
I
E
R
_
P
L
A
C
E
H
O
L
D
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
O
A
U
T
H
_
G
R
A
N
T
_
T
Y
P
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
O
A
U
T
H
_
G
R
A
N
T
_
T
Y
P
E
S
'
,
 
'
_
O
A
U
T
H
_
G
R
A
N
T
_
T
Y
P
E
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
O
A
U
T
H
_
I
M
P
L
I
C
I
T
_
N
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
O
A
U
T
H
_
I
M
P
L
I
C
I
T
_
N
O
T
E
S
'
,
 
'
_
O
A
U
T
H
_
I
M
P
L
I
C
I
T
_
N
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
O
A
U
T
H
_
A
U
T
H
O
R
I
S
A
T
I
O
N
_
U
R
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
O
A
U
T
H
_
A
U
T
H
O
R
I
S
A
T
I
O
N
_
U
R
L
'
,
 
'
_
O
A
U
T
H
_
A
U
T
H
O
R
I
S
A
T
I
O
N
_
U
R
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
q
u
e
r
y
 
=
 
"
S
E
L
E
C
T
 
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
 
c
l
i
e
n
t
_
s
e
c
r
e
t
 
,
 
s
c
o
p
e
 
,
 
i
d
e
n
t
i
f
i
e
r
 
,
 
r
e
d
i
r
e
c
t
_
u
r
i
 
F
R
O
M
 
#
_
_
j
o
m
r
e
s
_
o
a
u
t
h
_
c
l
i
e
n
t
s
 
W
H
E
R
E
 
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
 
'
"
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
.
"
'
 
A
N
D
 
u
s
e
r
_
i
d
 
=
 
"
.
(
i
n
t
)
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
i
d
 
.
 
'
 
L
I
M
I
T
 
1
 
'
;

	
	
$
r
e
s
u
l
t
 
=
 
d
o
S
e
l
e
c
t
S
q
l
(
$
q
u
e
r
y
)
;

	
	

	
	
$
c
l
i
e
n
t
_
s
c
o
p
e
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
c
o
u
n
t
(
$
r
e
s
u
l
t
)
>
0
)

	
	
	
{

	
	
	
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
s
u
l
t
 
a
s
 
$
c
l
i
e
n
t
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
C
L
I
E
N
T
_
I
D
'
]
=
$
c
l
i
e
n
t
-
>
c
l
i
e
n
t
_
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
C
L
I
E
N
T
_
S
E
C
R
E
T
'
]
=
$
c
l
i
e
n
t
-
>
c
l
i
e
n
t
_
s
e
c
r
e
t
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
I
D
E
N
T
I
F
I
E
R
'
]
=
$
c
l
i
e
n
t
-
>
i
d
e
n
t
i
f
i
e
r
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
R
E
D
I
R
E
C
T
_
U
R
I
'
]
=
$
c
l
i
e
n
t
-
>
r
e
d
i
r
e
c
t
_
u
r
i
;


	
	
	
	
i
f
 
(
t
r
i
m
(
$
c
l
i
e
n
t
-
>
s
c
o
p
e
)
 
!
=
 
"
"
 
)

	
	
	
	
	
$
c
l
i
e
n
t
_
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
 
"
,
"
 
,
 
$
c
l
i
e
n
t
-
>
s
c
o
p
e
 
)
;


	
	
	
	
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
[
'
C
L
I
E
N
T
_
S
E
C
R
E
T
'
]
 
=
=
 
"
"
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
C
L
I
E
N
T
_
S
E
C
R
E
T
'
]
 
=
 
c
r
e
a
t
e
N
e
w
A
P
I
K
e
y
(
)
;

	
	
	
	
	
}

	
	
	
	
}

	
	
	
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
I
D
E
N
T
I
F
I
E
R
'
]
=
"
"
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
L
I
E
N
T
_
I
D
'
]
=
g
e
n
e
r
a
t
e
J
o
m
r
e
s
R
a
n
d
o
m
S
t
r
i
n
g
(
 
1
5
 
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
L
I
E
N
T
_
S
E
C
R
E
T
'
]
 
=
c
r
e
a
t
e
N
e
w
A
P
I
K
e
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
R
E
D
I
R
E
C
T
_
U
R
I
'
]
 
=
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
l
i
v
e
_
s
i
t
e
'
 
)
.
"
/
"
.
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
_
D
I
R
E
C
T
O
R
Y
.
"
/
a
p
i
/
"
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
A
U
T
H
O
R
I
Z
E
_
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
.
'
&
t
a
s
k
=
o
a
u
t
h
_
i
s
a
u
t
h
o
r
i
s
e
d
&
r
e
s
p
o
n
s
e
_
t
y
p
e
=
t
o
k
e
n
&
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
'
.
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
I
E
N
T
_
I
D
'
]
.
'
&
r
e
d
i
r
e
c
t
_
u
r
i
=
'
.
 
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
D
I
R
E
C
T
_
U
R
I
'
]
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

	
	
f
o
r
e
a
c
h
 
(
$
s
c
o
p
e
s
_
c
l
a
s
s
-
>
d
e
f
a
u
l
t
_
s
c
o
p
e
s
 
a
s
 
$
c
a
t
e
g
o
r
y
 
=
>
 
$
c
a
t
e
g
o
r
y
_
s
c
o
p
e
s
)

	
	
	
{

	
	
	
$
p
o
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
c
o
p
e
_
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
o
[
'
_
O
A
U
T
H
_
S
C
O
P
E
_
C
A
T
E
G
O
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
 
$
c
a
t
e
g
o
r
y
 
,
 
$
c
a
t
e
g
o
r
y
 
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
c
a
t
e
g
o
r
y
_
s
c
o
p
e
s
 
a
s
 
$
s
c
o
p
e
)

	
	
	
	
{

	
	
	
	
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
s
c
o
p
e
-
>
u
s
e
r
_
t
y
p
e
 
,
 
 
$
a
v
a
i
l
a
b
l
e
_
s
c
o
p
e
s
 
)
 
)

	
	
	
	
	
{

	
	
	
	
	
$
s
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
s
r
[
'
C
H
E
C
K
E
D
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
n
_
a
r
r
a
y
 
(
 
$
s
c
o
p
e
-
>
s
c
o
p
e
 
,
 
 
$
c
l
i
e
n
t
_
s
c
o
p
e
s
 
)
 
)

	
	
	
	
	
	
$
s
r
[
'
C
H
E
C
K
E
D
'
]
 
=
 
"
c
h
e
c
k
e
d
=
'
c
h
e
c
k
e
d
'
"
;

	
	
	
	
	

	
	
	
	
	
$
s
r
[
'
S
C
O
P
E
'
]
 
=
 
$
s
c
o
p
e
-
>
s
c
o
p
e
;

	
	
	
	
	
$
s
r
[
'
S
C
O
P
E
_
F
R
I
E
N
D
L
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
 
$
s
c
o
p
e
-
>
d
e
f
i
n
i
t
i
o
n
 
,
 
$
s
c
o
p
e
-
>
d
e
f
i
n
i
t
i
o
n
 
)
;

	
	
	
	
	
$
s
r
[
'
S
C
O
P
E
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
 
$
s
c
o
p
e
-
>
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
 
,
 
$
s
c
o
p
e
-
>
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
 
)
;

	
	
	
	
	
$
s
c
o
p
e
_
r
o
w
s
[
]
=
$
s
r
;

	
	
	
	
	
}

	
	
	
	
}


	
	
	
i
f
 
(
 
c
o
u
n
t
(
$
s
c
o
p
e
_
r
o
w
s
)
>
0
)

	
	
	
	
{

	
	
	
	
$
p
o
[
]
=
$
o
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
c
o
p
e
_
c
a
t
e
g
o
r
i
e
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
o
 
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
s
c
o
p
e
_
r
o
w
s
 
)
;

	
	
	
	
$
r
o
w
s
[
]
[
'
S
C
O
P
E
S
'
]
 
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

	
	
	
}

	
	

	
	

	
	
$
j
r
t
b
a
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
o
m
r
e
s
_
t
o
o
l
b
a
r
'
 
)
;

	
	
$
j
r
t
b
 
 
 
=
 
$
j
r
t
b
a
r
-
>
s
t
a
r
t
T
a
b
l
e
(
)
;

	
	
$
j
r
t
b
 
.
=
 
$
j
r
t
b
a
r
-
>
t
o
o
l
b
a
r
I
t
e
m
(
 
'
c
a
n
c
e
l
'
,
 
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
o
a
u
t
h
"
 
)
,
 
'
'
 
)
;

	
	
$
j
r
t
b
 
.
=
 
$
j
r
t
b
a
r
-
>
t
o
o
l
b
a
r
I
t
e
m
(
 
'
s
a
v
e
'
,
 
'
'
,
 
'
'
,
 
t
r
u
e
,
 
'
s
a
v
e
_
c
l
i
e
n
t
'
 
)
;

	
	
i
f
 
(
 
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
 
!
=
 
'
'
 
)
 

	
	
	
$
j
r
t
b
 
.
=
 
$
j
r
t
b
a
r
-
>
t
o
o
l
b
a
r
I
t
e
m
(
 
'
d
e
l
e
t
e
'
,
 
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
d
e
l
e
t
e
_
c
l
i
e
n
t
&
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
"
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
.
"
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
"
 
)
,
 
'
'
 
)
;

	
	
$
j
r
t
b
 
.
=
 
$
j
r
t
b
a
r
-
>
e
n
d
T
a
b
l
e
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
J
O
M
R
E
S
T
O
O
L
B
A
R
'
 
]
 
=
 
$
j
r
t
b
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
e
d
i
t
_
c
l
i
e
n
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
