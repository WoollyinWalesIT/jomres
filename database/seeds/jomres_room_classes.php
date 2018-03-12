
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
7
 
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


$
q
u
e
r
y
 
=
 
"
T
R
U
N
C
A
T
E
 
T
A
B
L
E
 
`
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
r
o
o
m
_
c
l
a
s
s
e
s
`
;
"
;


i
f
 
(
!
d
o
I
n
s
e
r
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
)
 
{

	
$
t
h
i
s
-
>
s
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
'
E
r
r
o
r
,
 
u
n
a
b
l
e
 
t
o
 
t
r
u
n
c
a
t
e
 
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
r
o
o
m
_
c
l
a
s
s
e
s
 
t
a
b
l
e
'
,
 
'
d
a
n
g
e
r
'
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
q
u
e
r
y
 
=
 
"

I
N
S
E
R
T
 
I
N
T
O
 
`
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
r
o
o
m
_
c
l
a
s
s
e
s
`
 
(
`
r
o
o
m
_
c
l
a
s
s
e
s
_
u
i
d
`
,
 
`
r
o
o
m
_
c
l
a
s
s
_
a
b
b
v
`
,
 
`
r
o
o
m
_
c
l
a
s
s
_
f
u
l
l
_
d
e
s
c
`
,
 
`
i
m
a
g
e
`
,
 
`
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
`
)
 
V
A
L
U
E
S

(
1
,
 
'
R
o
o
m
 
D
o
u
b
l
e
 
b
e
d
s
'
,
 
'
'
,
 
'
d
o
u
b
l
e
.
p
n
g
'
,
 
'
0
'
)
,

(
2
,
 
'
R
o
o
m
 
T
w
i
n
 
b
e
d
s
'
,
 
'
'
,
 
'
t
w
i
n
.
p
n
g
'
,
 
'
0
'
)
,

(
3
,
 
'
R
o
o
m
 
S
i
n
g
l
e
'
,
 
'
'
,
 
'
s
i
n
g
l
e
.
p
n
g
'
,
 
'
0
'
)
,

(
4
,
 
'
R
o
o
m
 
4
 
P
o
s
t
e
r
 
b
e
d
'
,
 
'
'
,
 
'
f
o
u
r
p
o
s
t
e
r
.
p
n
g
'
,
 
'
0
'
)
,

(
5
,
 
'
1
 
B
e
d
r
o
o
m
'
,
 
'
'
,
 
'
1
b
e
d
r
o
o
m
.
p
n
g
'
,
 
'
0
'
)
,

(
6
,
 
'
2
 
B
e
d
r
o
o
m
s
'
,
 
'
'
,
 
'
2
b
e
d
r
o
o
m
s
.
p
n
g
'
,
 
'
0
'
)
,

(
7
,
 
'
3
 
B
e
d
r
o
o
m
s
'
,
 
'
'
,
 
'
3
b
e
d
r
o
o
m
s
.
p
n
g
'
,
 
'
0
'
)
,

(
8
,
 
'
4
 
B
e
d
r
o
o
m
s
'
,
 
'
'
,
 
'
4
b
e
d
r
o
o
m
s
.
p
n
g
'
,
 
'
0
'
)
,

(
9
,
 
'
5
 
B
e
d
r
o
o
m
s
'
,
 
'
'
,
 
'
5
b
e
d
r
o
o
m
s
.
p
n
g
'
,
 
'
0
'
)
,

(
1
0
,
 
'
6
+
 
B
e
d
r
o
o
m
s
'
,
 
'
'
,
 
'
6
p
l
u
s
b
e
d
r
o
o
m
s
.
p
n
g
'
,
 
'
0
'
)
,

(
1
1
,
 
'
T
e
n
t
 
p
i
t
c
h
 
1
 
p
e
r
s
o
n
 
'
,
 
'
'
,
 
'
c
a
m
p
i
n
g
_
1
b
i
v
i
_
p
i
t
c
h
.
p
n
g
'
,
 
'
0
'
)
,

(
1
2
,
 
'
T
e
n
t
 
p
i
t
c
h
 
2
 
p
e
r
s
o
n
 
'
,
 
'
'
,
 
'
c
a
m
p
i
n
g
_
2
_
m
a
n
_
t
e
n
t
_
p
i
t
c
h
.
p
n
g
'
,
 
'
0
'
)
,

(
1
3
,
 
'
T
e
n
t
 
p
i
t
c
h
 
3
 
p
e
r
s
o
n
 
'
,
 
'
'
,
 
'
c
a
m
p
i
n
g
_
3
_
m
a
n
_
t
e
n
t
_
p
i
t
c
h
.
p
n
g
'
,
 
'
0
'
)
,

(
1
4
,
 
'
T
e
n
t
 
p
i
t
c
h
 
4
 
p
e
r
s
o
n
 
'
,
 
'
'
,
 
'
c
a
m
p
i
n
g
_
4
_
m
a
n
_
t
e
n
t
_
p
i
t
c
h
.
p
n
g
'
,
 
'
0
'
)
,

(
1
5
,
 
'
T
e
n
t
 
p
i
t
c
h
 
6
+
 
p
e
r
s
o
n
'
,
 
'
'
,
 
'
c
a
m
p
i
n
g
_
6
_
m
a
n
_
t
e
n
t
_
p
i
t
c
h
.
p
n
g
'
,
 
'
0
'
)
,

(
1
6
,
 
'
C
a
r
 
r
e
n
t
a
l
 
H
a
t
c
h
b
a
c
k
'
,
 
'
'
,
 
'
c
a
r
_
r
e
n
t
a
l
_
h
a
t
c
h
b
a
c
k
.
p
n
g
'
,
 
'
0
'
)
,

(
1
7
,
 
'
C
a
r
 
r
e
n
t
a
l
 
L
u
x
u
r
y
'
,
 
'
'
,
 
'
c
a
r
_
r
e
n
t
a
l
_
l
u
x
u
r
y
.
p
n
g
'
,
 
'
0
'
)
,

(
1
8
,
 
'
C
a
r
 
r
e
n
t
a
l
 
M
i
n
i
v
a
n
'
,
 
'
'
,
 
'
c
a
r
_
r
e
n
t
a
l
_
p
e
o
p
l
e
c
a
r
r
i
e
r
.
p
n
g
'
,
 
'
0
'
)
,

(
1
9
,
 
'
C
a
r
 
r
e
n
t
a
l
 
S
a
l
o
o
n
'
,
 
'
'
,
 
'
c
a
r
_
r
e
n
t
a
l
_
s
a
l
o
o
n
.
p
n
g
'
,
 
'
0
'
)
,

(
2
0
,
 
'
C
a
r
 
r
e
n
t
a
l
 
S
p
o
r
t
s
c
a
r
'
,
 
'
'
,
 
'
c
a
r
_
r
e
n
t
a
l
_
s
p
o
r
t
s
c
a
r
.
p
n
g
'
,
 
'
0
'
)
,

(
2
1
,
 
'
T
e
n
t
 
p
i
t
c
h
 
C
a
r
a
v
a
n
'
,
 
'
'
,
 
'
c
a
m
p
i
n
g
_
c
a
r
a
v
a
n
_
p
i
t
c
h
.
p
n
g
'
,
 
'
0
'
)
,

(
2
2
,
 
'
Y
a
c
h
t
 
2
 
b
e
r
t
h
'
,
 
'
'
,
 
'
y
a
c
h
t
_
2
_
b
e
r
t
h
.
p
n
g
'
,
 
'
0
'
)
,

(
2
3
,
 
'
Y
a
c
h
t
 
4
 
b
e
r
t
h
'
,
 
'
'
,
 
'
y
a
c
h
t
_
4
_
b
e
r
t
h
.
p
n
g
'
,
 
'
0
'
)
,

(
2
4
,
 
'
Y
a
c
h
t
 
6
 
b
e
r
t
h
'
,
 
'
'
,
 
'
y
a
c
h
t
_
6
_
b
e
r
t
h
.
p
n
g
'
,
 
'
0
'
)
,

(
2
5
,
 
'
Y
a
c
h
t
 
8
+
 
b
e
r
t
h
'
,
 
'
'
,
 
'
y
a
c
h
t
_
8
_
b
e
r
t
h
.
p
n
g
'
,
 
'
0
'
)
;

"
;


i
f
 
(
!
d
o
I
n
s
e
r
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
)
 
{

	
$
t
h
i
s
-
>
s
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
'
E
r
r
o
r
,
 
u
n
a
b
l
e
 
t
o
 
i
n
s
e
r
t
 
s
a
m
p
l
e
 
d
a
t
a
 
i
n
 
t
h
e
 
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
r
o
o
m
_
c
l
a
s
s
e
s
 
t
a
b
l
e
'
,
 
'
d
a
n
g
e
r
'
)
;

}

