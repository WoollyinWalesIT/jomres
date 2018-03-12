
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
1
l
i
s
t
_
b
o
o
k
i
n
g
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
 
t
r
u
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
m
r
C
o
n
f
i
g
 
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
S
p
e
c
i
f
i
c
S
e
t
t
i
n
g
s
(
)
;

 
 
 
 
 
 
 
 
$
d
e
f
a
u
l
t
P
r
o
p
e
r
t
y
 
=
 
g
e
t
D
e
f
a
u
l
t
P
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
d
e
p
o
s
i
t
_
s
t
a
t
u
s
 
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
P
O
S
T
,
 
'
d
e
p
o
s
i
t
_
s
t
a
t
u
s
'
,
 
'
2
'
)
;

 
 
 
 
 
 
 
 
$
r
e
s
i
d
e
n
t
_
s
t
a
t
u
s
 
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
P
O
S
T
,
 
'
r
e
s
i
d
e
n
t
_
s
t
a
t
u
s
'
,
 
'
2
'
)
;

 
 
 
 
 
 
 
 
$
b
o
o
k
i
n
g
_
s
t
a
t
u
s
 
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
P
O
S
T
,
 
'
b
o
o
k
i
n
g
_
s
t
a
t
u
s
'
,
 
'
2
'
)
;

 
 
 
 
 
 
 
 
$
s
h
o
w
_
a
l
l
 
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
P
O
S
T
,
 
'
s
h
o
w
_
a
l
l
'
,
 
'
0
'
)
;

 
 
 
 
 
 
 
 
$
t
a
g
 
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
P
O
S
T
,
 
'
t
a
g
'
,
 
'
0
'
)
;

	
	
$
g
u
e
s
t
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
g
u
e
s
t
_
u
i
d
'
,
 
'
0
'
)
;


 
 
 
 
 
 
 
 
$
s
t
a
r
t
D
a
t
e
 
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
P
O
S
T
,
 
'
s
t
a
r
t
D
a
t
e
'
,
 
'
'
)
;

 
 
 
 
 
 
 
 
$
e
n
d
D
a
t
e
 
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
P
O
S
T
,
 
'
e
n
d
D
a
t
e
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
t
a
r
t
D
a
t
e
 
=
=
 
'
%
'
 
|
|
 
$
s
t
a
r
t
D
a
t
e
 
=
=
 
'
'
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
s
t
a
r
t
D
a
t
e
 
=
 
d
a
t
e
(
'
Y
/
m
/
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
'
-
5
 
y
e
a
r
s
'
)
)
;

 
 
 
 
 
 
 
 
}
 
e
l
s
e
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
s
t
a
r
t
D
a
t
e
 
=
 
J
S
C
a
l
C
o
n
v
e
r
t
I
n
p
u
t
D
a
t
e
s
(
$
s
t
a
r
t
D
a
t
e
)
;

 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
i
f
 
(
$
e
n
d
D
a
t
e
 
=
=
 
'
%
'
 
|
|
 
$
e
n
d
D
a
t
e
 
=
=
 
'
'
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
e
n
d
D
a
t
e
 
=
 
d
a
t
e
(
'
Y
/
m
/
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
'
+
5
 
y
e
a
r
s
'
)
)
;

 
 
 
 
 
 
 
 
}
 
e
l
s
e
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
e
n
d
D
a
t
e
 
=
 
J
S
C
a
l
C
o
n
v
e
r
t
I
n
p
u
t
D
a
t
e
s
(
$
e
n
d
D
a
t
e
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
S
T
A
T
U
S
_
B
O
O
K
I
N
G
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
S
T
A
T
U
S
_
B
O
O
K
I
N
G
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
T
E
X
T
_
P
E
N
D
I
N
G
'
 
]
 
=
 
$
m
r
C
o
n
f
i
g
[
 
'
w
h
o
l
e
d
a
y
_
b
o
o
k
i
n
g
'
 
]
 
=
=
 
'
1
'
 
?
 
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
I
E
W
B
O
O
K
I
N
G
S
_
P
E
N
D
I
N
G
_
W
H
O
L
E
D
A
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
I
E
W
B
O
O
K
I
N
G
S
_
P
E
N
D
I
N
G
_
W
H
O
L
E
D
A
Y
'
)
 
:
 
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
I
E
W
B
O
O
K
I
N
G
S
_
P
E
N
D
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
C
O
M
_
M
R
_
V
I
E
W
B
O
O
K
I
N
G
S
_
P
E
N
D
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
 
'
T
E
X
T
_
A
R
R
I
V
E
T
O
D
A
Y
'
 
]
 
=
 
$
m
r
C
o
n
f
i
g
[
 
'
w
h
o
l
e
d
a
y
_
b
o
o
k
i
n
g
'
 
]
 
=
=
 
'
1
'
 
?
 
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
I
E
W
B
O
O
K
I
N
G
S
_
A
R
R
I
V
E
T
O
D
A
Y
_
W
H
O
L
E
D
A
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
I
E
W
B
O
O
K
I
N
G
S
_
A
R
R
I
V
E
T
O
D
A
Y
_
W
H
O
L
E
D
A
Y
'
)
 
:
 
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
I
E
W
B
O
O
K
I
N
G
S
_
A
R
R
I
V
E
T
O
D
A
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
I
E
W
B
O
O
K
I
N
G
S
_
A
R
R
I
V
E
T
O
D
A
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
T
E
X
T
_
R
E
S
I
D
E
N
T
'
 
]
 
=
 
$
m
r
C
o
n
f
i
g
[
 
'
w
h
o
l
e
d
a
y
_
b
o
o
k
i
n
g
'
 
]
 
=
=
 
'
1
'
 
?
 
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
I
E
W
B
O
O
K
I
N
G
S
_
R
E
S
I
D
E
N
T
_
W
H
O
L
E
D
A
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
I
E
W
B
O
O
K
I
N
G
S
_
R
E
S
I
D
E
N
T
_
W
H
O
L
E
D
A
Y
'
)
 
:
 
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
I
E
W
B
O
O
K
I
N
G
S
_
R
E
S
I
D
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
C
O
M
_
M
R
_
V
I
E
W
B
O
O
K
I
N
G
S
_
R
E
S
I
D
E
N
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
 
'
T
E
X
T
_
L
A
T
E
'
 
]
 
=
 
$
m
r
C
o
n
f
i
g
[
 
'
w
h
o
l
e
d
a
y
_
b
o
o
k
i
n
g
'
 
]
 
=
=
 
'
1
'
 
?
 
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
I
E
W
B
O
O
K
I
N
G
S
_
L
A
T
E
_
W
H
O
L
E
D
A
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
I
E
W
B
O
O
K
I
N
G
S
_
L
A
T
E
_
W
H
O
L
E
D
A
Y
'
)
 
:
 
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
I
E
W
B
O
O
K
I
N
G
S
_
L
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
C
O
M
_
M
R
_
V
I
E
W
B
O
O
K
I
N
G
S
_
L
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
 
'
T
E
X
T
_
D
E
P
A
R
T
T
O
D
A
Y
'
 
]
 
=
 
$
m
r
C
o
n
f
i
g
[
 
'
w
h
o
l
e
d
a
y
_
b
o
o
k
i
n
g
'
 
]
 
=
=
 
'
1
'
 
?
 
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
I
E
W
B
O
O
K
I
N
G
S
_
D
E
P
A
R
T
T
O
D
A
Y
_
W
H
O
L
E
D
A
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
I
E
W
B
O
O
K
I
N
G
S
_
D
E
P
A
R
T
T
O
D
A
Y
_
W
H
O
L
E
D
A
Y
'
)
 
:
 
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
I
E
W
B
O
O
K
I
N
G
S
_
D
E
P
A
R
T
T
O
D
A
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
I
E
W
B
O
O
K
I
N
G
S
_
D
E
P
A
R
T
T
O
D
A
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
T
E
X
T
_
S
T
I
L
L
H
E
R
E
'
 
]
 
=
 
$
m
r
C
o
n
f
i
g
[
 
'
w
h
o
l
e
d
a
y
_
b
o
o
k
i
n
g
'
 
]
 
=
=
 
'
1
'
 
?
 
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
I
E
W
B
O
O
K
I
N
G
S
_
S
T
I
L
L
H
E
R
E
_
W
H
O
L
E
D
A
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
I
E
W
B
O
O
K
I
N
G
S
_
S
T
I
L
L
H
E
R
E
_
W
H
O
L
E
D
A
Y
'
)
 
:
 
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
I
E
W
B
O
O
K
I
N
G
S
_
S
T
I
L
L
H
E
R
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
V
I
E
W
B
O
O
K
I
N
G
S
_
S
T
I
L
L
H
E
R
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
 
'
T
E
X
T
_
B
O
O
K
E
D
O
U
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
S
T
A
T
U
S
_
C
H
E
C
K
E
D
O
U
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
S
T
A
T
U
S
_
C
H
E
C
K
E
D
O
U
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
T
E
X
T
_
C
A
N
C
E
L
L
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
S
T
A
T
U
S
_
C
A
N
C
E
L
L
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
S
T
A
T
U
S
_
C
A
N
C
E
L
L
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
I
E
W
B
O
O
K
I
N
G
S
_
S
T
A
T
U
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
C
O
M
_
M
R
_
V
I
E
W
B
O
O
K
I
N
G
S
_
S
T
A
T
U
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
V
I
E
W
B
O
O
K
I
N
G
S
_
S
T
A
T
U
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
C
O
M
_
M
R
_
V
I
E
W
B
O
O
K
I
N
G
S
_
F
I
R
S
T
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
D
I
S
P
G
U
E
S
T
_
F
I
R
S
T
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
D
I
S
P
G
U
E
S
T
_
F
I
R
S
T
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
I
E
W
B
O
O
K
I
N
G
S
_
S
U
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
D
I
S
P
G
U
E
S
T
_
S
U
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
D
I
S
P
G
U
E
S
T
_
S
U
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
O
M
_
M
R
_
V
I
E
W
B
O
O
K
I
N
G
S
_
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
C
O
M
_
M
R
_
E
D
I
T
B
O
O
K
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
C
O
M
_
M
R
_
E
D
I
T
B
O
O
K
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
C
O
M
_
M
R
_
E
D
I
T
B
O
O
K
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
B
O
O
K
I
N
G
_
N
U
M
B
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
B
O
O
K
I
N
G
_
N
U
M
B
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
B
O
O
K
I
N
G
_
N
U
M
B
E
R
'
,
 
t
r
u
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
,
 
f
a
l
s
e
)
;

 
 
 
 
 
 
 
 
i
f
 
(
$
m
r
C
o
n
f
i
g
[
 
'
w
h
o
l
e
d
a
y
_
b
o
o
k
i
n
g
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
A
R
R
I
V
A
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
I
E
W
B
O
O
K
I
N
G
S
_
A
R
R
I
V
A
L
_
W
H
O
L
E
D
A
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
I
E
W
B
O
O
K
I
N
G
S
_
A
R
R
I
V
A
L
_
W
H
O
L
E
D
A
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
D
E
P
A
R
T
U
R
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
I
E
W
B
O
O
K
I
N
G
S
_
D
E
P
A
R
T
U
R
E
_
W
H
O
L
E
D
A
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
I
E
W
B
O
O
K
I
N
G
S
_
D
E
P
A
R
T
U
R
E
_
W
H
O
L
E
D
A
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
A
R
R
I
V
A
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
I
E
W
B
O
O
K
I
N
G
S
_
A
R
R
I
V
A
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
I
E
W
B
O
O
K
I
N
G
S
_
A
R
R
I
V
A
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

 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
$
m
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
h
o
w
d
e
p
a
r
t
u
r
e
i
n
p
u
t
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
D
E
P
A
R
T
U
R
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
I
E
W
B
O
O
K
I
N
G
S
_
D
E
P
A
R
T
U
R
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
V
I
E
W
B
O
O
K
I
N
G
S
_
D
E
P
A
R
T
U
R
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
D
E
P
A
R
T
U
R
E
'
 
]
 
=
 
'
&
n
b
s
p
;
'
;

 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
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
C
O
N
T
R
A
C
T
_
T
O
T
A
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
Q
U
I
C
K
R
E
S
_
S
T
E
P
4
_
T
O
T
A
L
I
N
V
O
I
C
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
Q
U
I
C
K
R
E
S
_
S
T
E
P
4
_
T
O
T
A
L
I
N
V
O
I
C
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
D
E
P
O
S
I
T
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
C
O
M
_
M
R
_
E
B
_
P
A
Y
M
_
D
E
P
O
S
I
T
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
C
O
M
_
M
R
_
E
B
_
P
A
Y
M
_
D
E
P
O
S
I
T
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
H
C
O
N
T
R
A
C
T
_
U
I
D
'
 
]
 
=
 
'
U
i
d
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
G
U
E
S
T
_
L
A
N
D
L
I
N
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
D
I
S
P
G
U
E
S
T
_
L
A
N
D
L
I
N
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
D
I
S
P
G
U
E
S
T
_
L
A
N
D
L
I
N
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
G
U
E
S
T
_
M
O
B
I
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
D
I
S
P
G
U
E
S
T
_
M
O
B
I
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
C
O
M
_
M
R
_
D
I
S
P
G
U
E
S
T
_
M
O
B
I
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
H
I
N
V
O
I
C
E
_
U
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
R
P
O
R
T
A
L
_
L
I
S
T
B
O
O
K
I
N
G
S
_
H
E
A
D
E
R
_
I
N
V
O
I
C
E
_
I
D
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
L
I
S
T
B
O
O
K
I
N
G
S
_
H
E
A
D
E
R
_
I
N
V
O
I
C
E
_
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
H
S
P
E
C
I
A
L
_
R
E
Q
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
C
O
M
_
M
R
_
E
B
_
R
O
O
M
_
B
O
O
K
I
N
G
S
P
E
C
I
A
L
R
E
Q
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
E
B
_
R
O
O
M
_
B
O
O
K
I
N
G
S
P
E
C
I
A
L
R
E
Q
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
T
I
M
E
S
T
A
M
P
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
D
A
T
E
_
O
F
_
B
O
O
K
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
H
D
A
T
E
_
O
F
_
B
O
O
K
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
H
A
P
P
R
O
V
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
B
O
O
K
I
N
G
_
I
N
Q
U
I
R
Y
_
H
A
P
P
R
O
V
A
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
B
O
O
K
I
N
G
_
I
N
Q
U
I
R
Y
_
H
A
P
P
R
O
V
A
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
L
A
S
T
C
H
A
N
G
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
H
L
A
S
T
C
H
A
N
G
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
H
L
A
S
T
C
H
A
N
G
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
M
A
D
E
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
B
O
O
K
I
N
G
_
M
A
D
E
_
B
Y
'
,
 
'
B
O
O
K
I
N
G
_
M
A
D
E
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
t
a
s
k
'
)
 
=
=
 
'
l
i
s
t
_
b
o
o
k
i
n
g
s
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
T
O
U
R
_
D
I
V
_
I
D
'
 
]
 
=
 
'
t
o
u
r
_
t
a
r
g
e
t
_
l
i
s
t
a
l
l
_
b
o
o
k
i
n
g
s
'
;

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
/
/
b
u
t
t
o
n
s

 
 
 
 
 
 
 
 
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
E
W
_
B
O
O
K
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
H
N
E
W
_
B
O
O
K
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
H
N
E
W
_
B
O
O
K
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
N
E
W
_
B
O
O
K
I
N
G
_
U
R
L
'
]
 
=
 
g
e
t
_
b
o
o
k
i
n
g
_
u
r
l
(
$
d
e
f
a
u
l
t
P
r
o
p
e
r
t
y
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
B
L
A
C
K
_
B
O
O
K
I
N
G
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
F
R
O
N
T
_
B
L
A
C
K
B
O
O
K
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
F
R
O
N
T
_
B
L
A
C
K
B
O
O
K
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
B
L
A
C
K
_
B
O
O
K
I
N
G
S
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
r
l
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
l
i
s
t
_
b
l
a
c
k
_
b
o
o
k
i
n
g
s
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
H
S
I
M
P
L
E
_
B
O
O
K
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
H
Q
U
I
C
K
_
B
O
O
K
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
H
Q
U
I
C
K
_
B
O
O
K
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
S
I
M
P
L
E
_
B
O
O
K
I
N
G
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
r
l
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
e
a
s
y
_
b
l
a
c
k
b
o
o
k
'
)
;


 
 
 
 
 
 
 
 
/
/
f
i
l
t
e
r
s

 
 
 
 
 
 
 
 
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
I
L
T
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
H
F
I
L
T
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
H
F
I
L
T
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
H
S
T
A
R
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
H
F
R
O
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
H
F
R
O
M
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
T
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
H
T
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
H
D
E
P
O
S
I
T
_
S
T
A
T
U
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
H
S
T
A
T
U
S
_
D
E
P
O
S
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
H
S
T
A
T
U
S
_
D
E
P
O
S
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
S
I
D
E
N
T
_
S
T
A
T
U
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
H
S
T
A
T
U
S
_
G
U
E
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
H
S
T
A
T
U
S
_
G
U
E
S
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
B
O
O
K
I
N
G
_
S
T
A
T
U
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
H
S
T
A
T
U
S
_
B
O
O
K
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
H
S
T
A
T
U
S
_
B
O
O
K
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
H
S
H
O
W
_
A
L
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
H
S
T
A
T
U
S
_
S
H
O
W
_
B
O
O
K
I
N
G
S
_
F
O
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
H
S
T
A
T
U
S
_
S
H
O
W
_
B
O
O
K
I
N
G
S
_
F
O
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
S
T
A
R
T
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
D
a
t
e
I
n
p
u
t
(
'
s
t
a
r
t
D
a
t
e
'
,
 
$
s
t
a
r
t
D
a
t
e
,
 
f
a
l
s
e
,
 
t
r
u
e
,
 
t
r
u
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
E
N
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
D
a
t
e
I
n
p
u
t
(
'
e
n
d
D
a
t
e
'
,
 
$
e
n
d
D
a
t
e
,
 
f
a
l
s
e
,
 
t
r
u
e
,
 
t
r
u
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
'
2
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
S
T
A
T
U
S
_
A
N
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
S
T
A
T
U
S
_
A
N
Y
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
S
T
A
T
U
S
_
P
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
S
T
A
T
U
S
_
P
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
S
T
A
T
U
S
_
N
O
T
P
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
S
T
A
T
U
S
_
N
O
T
P
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
D
E
P
O
S
I
T
_
S
T
A
T
U
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
o
p
t
i
o
n
s
,
 
'
d
e
p
o
s
i
t
_
s
t
a
t
u
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
d
e
p
o
s
i
t
_
s
t
a
t
u
s
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
'
2
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
S
T
A
T
U
S
_
A
N
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
S
T
A
T
U
S
_
A
N
Y
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
'
3
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
V
I
E
W
B
O
O
K
I
N
G
S
_
P
E
N
D
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
C
O
M
_
M
R
_
V
I
E
W
B
O
O
K
I
N
G
S
_
P
E
N
D
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
V
I
E
W
B
O
O
K
I
N
G
S
_
R
E
S
I
D
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
C
O
M
_
M
R
_
V
I
E
W
B
O
O
K
I
N
G
S
_
R
E
S
I
D
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
S
T
A
T
U
S
_
C
H
E
C
K
E
D
O
U
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
S
T
A
T
U
S
_
C
H
E
C
K
E
D
O
U
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
S
I
D
E
N
T
_
S
T
A
T
U
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
o
p
t
i
o
n
s
,
 
'
r
e
s
i
d
e
n
t
_
s
t
a
t
u
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
r
e
s
i
d
e
n
t
_
s
t
a
t
u
s
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
'
2
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
S
T
A
T
U
S
_
A
N
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
S
T
A
T
U
S
_
A
N
Y
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
S
T
A
T
U
S
_
A
C
T
I
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
S
T
A
T
U
S
_
A
C
T
I
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
S
T
A
T
U
S
_
C
A
N
C
E
L
L
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
S
T
A
T
U
S
_
C
A
N
C
E
L
L
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
B
O
O
K
I
N
G
_
S
T
A
T
U
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
o
p
t
i
o
n
s
,
 
'
b
o
o
k
i
n
g
_
s
t
a
t
u
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
b
o
o
k
i
n
g
_
s
t
a
t
u
s
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
H
S
T
A
T
U
S
_
C
U
R
R
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
H
S
T
A
T
U
S
_
C
U
R
R
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
S
T
A
T
U
S
_
A
L
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
S
T
A
T
U
S
_
A
L
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
S
H
O
W
_
A
L
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
s
h
o
w
_
a
l
l
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
s
h
o
w
_
a
l
l
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
l
i
s
t
_
b
o
o
k
i
n
g
s
_
a
j
a
x
&
s
t
a
r
t
D
a
t
e
=
'
.
$
s
t
a
r
t
D
a
t
e
.
'
&
e
n
d
D
a
t
e
=
'
.
$
e
n
d
D
a
t
e
.
'
&
d
e
p
o
s
i
t
_
s
t
a
t
u
s
=
'
.
$
d
e
p
o
s
i
t
_
s
t
a
t
u
s
.
'
&
r
e
s
i
d
e
n
t
_
s
t
a
t
u
s
=
'
.
$
r
e
s
i
d
e
n
t
_
s
t
a
t
u
s
.
'
&
b
o
o
k
i
n
g
_
s
t
a
t
u
s
=
'
.
$
b
o
o
k
i
n
g
_
s
t
a
t
u
s
.
'
&
s
h
o
w
_
a
l
l
=
'
.
$
s
h
o
w
_
a
l
l
.
'
&
t
a
g
=
'
.
$
t
a
g
.
'
&
g
u
e
s
t
_
u
i
d
=
'
.
$
g
u
e
s
t
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
l
i
s
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
b
o
o
k
i
n
g
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
 
e
l
s
e
 
{

	
	
	
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
C
O
M
_
M
R
_
E
D
I
T
B
O
O
K
I
N
G
_
A
D
M
I
N
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
C
O
M
_
M
R
_
E
D
I
T
B
O
O
K
I
N
G
_
A
D
M
I
N
_
T
I
T
L
E
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

