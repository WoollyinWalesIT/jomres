
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
e
d
i
t
P
f
e
a
t
u
r
e

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
a
l
l
_
p
t
y
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
f
e
a
t
u
r
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
f
e
a
t
u
r
e
s
'
)
;

	
	

 
 
 
 
 
 
 
 
$
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
i
d
'
,
 
0
)
;

 

 
 
 
 
 
 
 
 
i
f
 
(
$
i
d
 
>
 
0
)
 
{

	
	
	
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
p
r
o
p
e
r
t
y
_
f
e
a
t
u
r
e
(
$
i
d
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
f
e
a
t
u
r
e
s
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
f
e
a
t
u
r
e
s
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
f
e
a
t
u
r
e
s
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
p
r
o
p
e
r
t
y
_
f
e
a
t
u
r
e
s
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
(
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
_
a
l
l
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
F
E
A
T
U
R
E
U
I
D
'
 
]
 
=
 
$
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
F
E
A
T
U
R
E
_
A
B
B
V
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
a
b
b
v
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
F
E
A
T
U
R
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
d
e
s
c
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
i
m
a
g
e
;

	
	
$
c
a
t
_
i
d
 
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
c
a
t
_
i
d
;


	
	
/
/
p
r
o
p
e
r
t
y
 
t
y
p
e
s
 
l
i
s
t

	
	
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
 
a
s
 
$
p
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
p
r
o
p
e
r
t
y
t
y
p
e
_
i
d
'
 
]
 
=
 
$
p
[
'
i
d
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
p
e
r
t
y
t
y
p
e
_
d
e
s
c
'
 
]
 
=
 
$
p
[
'
p
t
y
p
e
'
]
;

	
	
	
$
r
[
 
'
c
h
e
c
k
e
d
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
p
[
'
i
d
'
]
,
 
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
p
t
y
p
e
_
x
r
e
f
)
)
 
{

	
	
	
	
$
r
[
 
'
c
h
e
c
k
e
d
'
 
]
 
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
;

	
	
	
}

	
	
	

	
	
	
$
a
l
l
_
p
t
y
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
r
;

	
	
}


	
	
/
/
f
e
a
t
u
r
e
 
i
m
a
g
e
s

	
	
$
i
m
a
g
e
s
 
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
l
l
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
f
e
a
t
u
r
e
s
_
i
m
a
g
e
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
i
m
a
g
e
s
 
a
s
 
$
i
)
 
{

	
	
	
$
i
[
 
'
I
S
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
 
$
i
[
 
'
I
M
A
G
E
_
F
I
L
E
N
A
M
E
'
 
]
 
=
=
 
$
i
m
a
g
e
 
)
 
{

	
	
	
	
$
i
[
 
'
I
S
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
c
h
e
c
k
e
d
'
;

	
	
	
}

	
	
	

	
	
	
$
r
o
w
s
[
]
 
=
 
$
i
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
H
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
F
E
A
T
U
R
E
S
_
H
E
A
D
E
R
_
L
I
N
K
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
F
E
A
T
U
R
E
S
_
H
E
A
D
E
R
_
L
I
N
K
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
F
E
A
T
U
R
E
A
B
B
V
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
F
E
A
T
U
R
E
S
_
A
B
B
V
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
F
E
A
T
U
R
E
S
_
A
B
B
V
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
F
E
A
T
U
R
E
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
F
E
A
T
U
R
E
S
_
H
E
A
D
E
R
_
D
E
S
C
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
F
E
A
T
U
R
E
S
_
H
E
A
D
E
R
_
D
E
S
C
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
F
E
A
T
U
R
E
S
_
H
E
A
D
E
R
_
L
I
N
K
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
F
E
A
T
U
R
E
S
_
H
E
A
D
E
R
_
L
I
N
K
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
A
S
S
I
G
N
M
E
N
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
A
S
S
I
G
N
M
E
N
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
A
S
S
I
G
N
M
E
N
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
H
I
M
A
G
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
A
_
I
C
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
A
_
I
C
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
p
t
i
o
n
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
p
t
i
o
n
s
[
]
 
=
 
j
o
m
r
e
s
H
T
M
L
:
:
m
a
k
e
O
p
t
i
o
n
(
0
,
 
'
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
f
e
a
t
u
r
e
s
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
f
e
a
t
u
r
e
s
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
 
a
s
 
$
c
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
o
p
t
i
o
n
s
[
]
 
=
 
j
o
m
r
e
s
H
T
M
L
:
:
m
a
k
e
O
p
t
i
o
n
(
$
c
[
'
i
d
'
]
,
 
$
c
[
'
t
i
t
l
e
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
o
m
r
e
s
H
T
M
L
:
:
s
e
l
e
c
t
L
i
s
t
(
$
o
p
t
i
o
n
s
,
 
'
c
a
t
_
i
d
'
,
 
'
c
l
a
s
s
=
"
i
n
p
u
t
b
o
x
"
 
s
i
z
e
=
"
1
"
'
,
 
'
v
a
l
u
e
'
,
 
'
t
e
x
t
'
,
 
$
c
a
t
_
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
H
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
C
A
T
E
G
O
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
H
C
A
T
E
G
O
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
 
'
I
N
C
L
U
D
E
I
N
F
I
L
T
E
R
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
I
N
C
L
U
D
E
I
N
F
I
L
T
E
R
S
'
,
 
'
I
N
C
L
U
D
E
I
N
F
I
L
T
E
R
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
I
N
C
L
U
D
E
I
N
F
I
L
T
E
R
S
_
D
E
S
C
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
I
N
C
L
U
D
E
I
N
F
I
L
T
E
R
S
_
D
E
S
C
'
,
 
'
I
N
C
L
U
D
E
I
N
F
I
L
T
E
R
S
_
D
E
S
C
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
y
e
s
n
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
y
e
s
n
o
[
 
]
 
=
 
j
o
m
r
e
s
H
T
M
L
:
:
m
a
k
e
O
p
t
i
o
n
(
'
0
'
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
O
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
O
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
y
e
s
n
o
[
 
]
 
=
 
j
o
m
r
e
s
H
T
M
L
:
:
m
a
k
e
O
p
t
i
o
n
(
'
1
'
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
Y
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
C
O
M
_
M
R
_
Y
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
F
I
L
T
E
R
S
'
 
]
 
=
 
j
o
m
r
e
s
H
T
M
L
:
:
s
e
l
e
c
t
L
i
s
t
(
$
y
e
s
n
o
,
 
'
i
n
c
l
u
d
e
_
i
n
_
f
i
l
t
e
r
s
'
,
 
'
c
l
a
s
s
=
"
i
n
p
u
t
b
o
x
"
 
s
i
z
e
=
"
1
"
'
,
 
'
v
a
l
u
e
'
,
 
'
t
e
x
t
'
,
 
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
i
n
c
l
u
d
e
_
i
n
_
f
i
l
t
e
r
s
 
)
;

	
	

 
 
 
 
 
 
 
 
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
S
a
v
e
.
p
n
g
'
)
;

 
 
 
 
 
 
 
 
$
l
i
n
k
 
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
.
'
&
t
a
s
k
=
l
i
s
t
P
f
e
a
t
u
r
e
s
'
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
s
a
v
e
P
f
e
a
t
u
r
e
'
,
 
$
l
i
n
k
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
S
A
V
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
S
A
V
E
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
 
'
s
a
v
e
P
f
e
a
t
u
r
e
'
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
e
d
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
f
e
a
t
u
r
e
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
a
l
l
_
p
t
y
p
e
_
r
o
w
s
'
,
 
$
a
l
l
_
p
t
y
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

