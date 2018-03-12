
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
l
i
s
t
_
u
s
e
r
s

	
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
o
u
t
p
u
t
[
 
'
H
L
E
G
E
N
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
H
L
E
G
E
N
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
H
L
E
G
E
N
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
M
A
N
A
G
E
R
_
C
H
O
O
S
E
_
E
X
I
S
T
I
N
G
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
M
A
N
A
G
E
R
_
C
H
O
O
S
E
_
E
X
I
S
T
I
N
G
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
M
A
N
A
G
E
R
_
C
H
O
O
S
E
_
E
X
I
S
T
I
N
G
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
C
H
O
O
S
E
M
A
N
A
G
E
R
_
N
U
M
B
E
R
O
F
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
A
S
S
I
G
N
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
C
H
O
O
S
E
M
A
N
A
G
E
R
_
N
U
M
B
E
R
O
F
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
A
S
S
I
G
N
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
C
H
O
O
S
E
M
A
N
A
G
E
R
_
N
U
M
B
E
R
O
F
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
A
S
S
I
G
N
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
H
A
C
C
E
S
S
L
E
V
E
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
A
S
S
I
G
N
U
S
E
R
_
A
U
T
H
O
R
I
S
E
D
A
C
C
E
S
S
L
E
V
E
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
A
S
S
I
G
N
U
S
E
R
_
A
U
T
H
O
R
I
S
E
D
A
C
C
E
S
S
L
E
V
E
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
H
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
A
S
S
I
G
N
U
S
E
R
_
U
S
E
R
N
A
M
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
C
O
M
_
M
R
_
A
S
S
I
G
N
U
S
E
R
_
U
S
E
R
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
j
o
m
r
e
s
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
u
s
e
r
s
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
u
s
e
r
s
-
>
g
e
t
_
u
s
e
r
s
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
j
o
m
r
e
s
_
u
s
e
r
s
-
>
u
s
e
r
s
 
a
s
 
$
u
 
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


	
	
	
s
w
i
t
c
h
(
$
u
[
'
a
c
c
e
s
s
_
l
e
v
e
l
'
]
)

	
	
	
	
{

	
	
	
	
c
a
s
e
 
5
0
:
 
/
/
r
e
c
e
p
t
i
o
n
i
s
t

	
	
	
	
	
$
r
[
 
'
L
A
B
E
L
_
C
L
A
S
S
'
 
]
 
=
 
'
l
a
b
e
l
-
t
e
a
l
'
;

	
	
	
	
	
$
r
[
 
'
A
C
C
E
S
S
L
E
V
E
L
'
 
]
 
=
 
'
R
e
c
e
p
t
i
o
n
i
s
t
'
;

	
	
	
	
	
b
r
e
a
k
;

	
	
	
	
c
a
s
e
 
7
0
:
 
/
/
m
a
n
a
g
e
r

	
	
	
	
	
$
r
[
 
'
L
A
B
E
L
_
C
L
A
S
S
'
 
]
 
=
 
'
l
a
b
e
l
-
b
l
u
e
'
;

	
	
	
	
	
$
r
[
 
'
A
C
C
E
S
S
L
E
V
E
L
'
 
]
 
=
 
'
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
'
;

	
	
	
	
	
b
r
e
a
k
;

	
	
	
	
c
a
s
e
 
9
0
:
 
/
/
s
u
p
e
r
 
p
r
o
p
e
r
t
y
 
m
a
n
a
g
e
r

	
	
	
	
	
$
r
[
 
'
L
A
B
E
L
_
C
L
A
S
S
'
 
]
 
=
 
'
l
a
b
e
l
-
p
u
r
p
l
e
'
;

	
	
	
	
	
$
r
[
 
'
A
C
C
E
S
S
L
E
V
E
L
'
 
]
 
=
 
'
S
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
'
;

	
	
	
	
	
b
r
e
a
k
;

	
	
	
	
d
e
f
a
u
l
t
:

	
	
	
	
	
$
r
[
 
'
L
A
B
E
L
_
C
L
A
S
S
'
 
]
 
=
 
'
l
a
b
e
l
-
g
r
e
y
'
;

	
	
	
	
	
$
r
[
 
'
A
C
C
E
S
S
L
E
V
E
L
'
 
]
 
=
 
'
N
o
 
m
a
n
a
g
e
m
e
n
t
 
a
c
c
e
s
s
'
;

	
	
	
	
	
b
r
e
a
k
;

	
	
	
	
}

	
	
	

	
	
	
i
f
 
(
 
$
u
[
'
s
u
s
p
e
n
d
e
d
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
L
A
B
E
L
_
C
L
A
S
S
'
 
]
 
=
 
'
l
a
b
e
l
-
r
e
d
'
;

	
	
	
	
}

	
	
	

	
	
	
i
f
 
(
 
$
u
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
 
=
=
 
'
'
 
)
 

	
	
	
	
{

	
	
	
	
$
r
[
 
'
L
A
B
E
L
_
C
L
A
S
S
'
 
]
 
=
 
'
l
a
b
e
l
-
o
r
a
n
g
e
'
;

	
	
	
	
}

	
	
	

	
	
	
i
f
 
(
 
$
u
[
'
a
c
c
e
s
s
_
l
e
v
e
l
'
]
 
>
 
0
 
)

	
	
	
	
{

	
	
	
	
$
t
o
o
l
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
I
t
e
m
T
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
t
o
o
l
b
a
r
-
>
n
e
w
T
o
o
l
b
a
r
(
)
;

	
	
	
	
$
t
o
o
l
b
a
r
-
>
a
d
d
I
t
e
m
(
 
'
f
a
 
f
a
-
p
e
n
c
i
l
-
s
q
u
a
r
e
-
o
'
,
 
'
b
t
n
 
b
t
n
-
i
n
f
o
'
,
 
'
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
_
A
D
M
I
N
 
.
 
'
&
t
a
s
k
=
e
d
i
t
_
u
s
e
r
&
c
m
s
_
u
s
e
r
_
i
d
=
'
 
.
 
$
u
[
'
c
m
s
_
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
,
 
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
C
O
M
M
O
N
_
E
D
I
T
'
,
 
'
C
O
M
M
O
N
_
E
D
I
T
'
,
 
f
a
l
s
e
 
)
 
)
;

	
	
	
	

	
	
	
	
i
f
 
(
 
$
u
[
'
a
c
c
e
s
s
_
l
e
v
e
l
'
]
 
<
 
9
0
 
)

	
	
	
	
	
{

	
	
	
	
	
i
f
 
(
 
$
u
[
'
s
u
s
p
e
n
d
e
d
'
]
 
=
=
 
1
 
)
 

	
	
	
	
	
	
{

	
	
	
	
	
	
$
t
o
o
l
b
a
r
-
>
a
d
d
S
e
c
o
n
d
a
r
y
I
t
e
m
(
 
'
f
a
 
f
a
-
b
a
n
'
,
 
'
'
,
 
'
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
_
A
D
M
I
N
 
.
 
'
&
t
a
s
k
=
u
n
s
u
s
p
e
n
d
_
u
s
e
r
&
c
m
s
_
u
s
e
r
_
i
d
=
'
 
.
 
$
u
[
'
c
m
s
_
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
,
 
'
U
n
s
u
s
p
e
n
d
'
 
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
o
l
b
a
r
-
>
a
d
d
S
e
c
o
n
d
a
r
y
I
t
e
m
(
 
'
f
a
 
f
a
-
b
a
n
'
,
 
'
'
,
 
'
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
_
A
D
M
I
N
 
.
 
'
&
t
a
s
k
=
s
u
s
p
e
n
d
_
u
s
e
r
&
c
m
s
_
u
s
e
r
_
i
d
=
'
 
.
 
$
u
[
'
c
m
s
_
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
,
 
'
S
u
s
p
e
n
d
'
 
)
;

	
	
	
	
	
	
}

	
	
	
	
	
}

	
	
	
	

	
	
	
	
$
t
o
o
l
b
a
r
-
>
a
d
d
S
e
c
o
n
d
a
r
y
I
t
e
m
(
 
'
f
a
 
f
a
-
t
r
a
s
h
-
o
'
,
 
'
'
,
 
'
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
_
A
D
M
I
N
 
.
 
'
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
u
s
e
r
&
c
m
s
_
u
s
e
r
_
i
d
=
'
 
.
 
$
u
[
'
c
m
s
_
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
,
 
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
C
O
M
M
O
N
_
D
E
L
E
T
E
'
,
 
'
C
O
M
M
O
N
_
D
E
L
E
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
 
)
;

	
	
	
	

	
	
	
	
$
r
[
'
L
I
N
K
T
E
X
T
'
]
 
=
 
$
t
o
o
l
b
a
r
-
>
g
e
t
T
o
o
l
b
a
r
(
)
;

	
	
	
	
}

	
	
	
e
l
s
e

	
	
	
	
$
r
[
 
'
L
I
N
K
T
E
X
T
'
 
]
 
=
 
"
"
;


	
	
	
i
f
 
(
$
u
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
 
!
=
 
'
'
)

	
	
	
	
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
u
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

	
	
	
e
l
s
e

	
	
	
	
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
-
'
;

	
	
	

	
	
	
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
O
F
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
'
 
]
 
=
 
c
o
u
n
t
(
$
u
[
'
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
'
]
)
;

	
	
	
$
r
[
 
'
A
P
I
_
K
E
Y
'
 
]
 
	
	
 
 
 
=
 
$
u
[
'
a
p
i
k
e
y
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
i
m
a
g
e
 
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
m
a
k
e
I
m
a
g
e
V
a
l
i
d
(
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
A
d
d
I
t
e
m
.
p
n
g
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
c
u
s
t
o
m
T
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
e
d
i
t
'
,
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
,
 
$
t
e
x
t
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
C
O
M
M
O
N
_
N
E
W
'
,
 
'
C
O
M
M
O
N
_
N
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
,
 
$
s
u
b
m
i
t
O
n
C
l
i
c
k
=
t
r
u
e
,
 
$
s
u
b
m
i
t
T
a
s
k
=
"
e
d
i
t
_
u
s
e
r
"
,
 
$
i
m
a
g
e
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
,
 
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
"
C
O
M
M
O
N
_
C
A
N
C
E
L
"
,
'
C
O
M
M
O
N
_
C
A
N
C
E
L
'
,
f
a
l
s
e
)
 
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
l
i
s
t
_
u
s
e
r
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

