
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
h
o
t
e
l
_
f
e
a
t
u
r
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
h
o
t
e
l
_
f
e
a
t
u
r
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
h
o
t
e
l
_
f
e
a
t
u
r
e
s
`
 
(
`
h
o
t
e
l
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
u
i
d
`
,
 
`
h
o
t
e
l
_
f
e
a
t
u
r
e
_
a
b
b
v
`
,
 
`
h
o
t
e
l
_
f
e
a
t
u
r
e
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
,
 
`
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
`
,
 
`
c
a
t
_
i
d
`
,
 
`
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
`
)
 
V
A
L
U
E
S

(
3
,
 
'
A
i
r
p
o
r
t
'
,
 
'
C
l
o
s
e
 
t
o
 
t
h
e
 
a
i
r
p
o
r
t
'
,
 
'
a
i
r
p
o
r
t
_
n
e
a
r
b
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
,
 
'
0
'
,
 
0
,
 
1
)
,

(
4
,
 
'
M
i
n
i
b
a
r
'
,
 
'
M
i
n
i
b
a
r
 
i
n
 
r
o
o
m
'
,
 
'
a
i
r
_
c
o
n
d
i
t
i
o
n
i
n
g
.
p
n
g
'
,
 
'
0
'
,
 
'
1
'
,
 
0
,
 
1
)
,

(
5
,
 
'
A
l
l
 
I
n
c
l
u
s
i
v
e
'
,
 
'
A
l
l
 
i
n
c
l
u
s
i
v
e
 
r
a
t
e
s
 
a
v
a
i
l
a
b
l
e
'
,
 
'
a
l
l
i
n
c
.
p
n
g
'
,
 
'
0
'
,
 
'
a
:
0
:
{
}
'
,
 
9
,
 
1
)
,

(
6
,
 
'
F
a
m
i
l
y
 
F
r
i
e
n
d
l
y
'
,
 
'
C
h
i
l
d
r
e
n
 
W
e
l
c
o
m
e
'
,
 
'
b
a
b
y
_
f
r
i
e
n
d
l
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
,
 
'
1
'
,
 
0
,
 
1
)
,

(
7
,
 
'
B
a
l
c
o
n
y
'
,
 
'
S
o
m
e
 
r
o
o
m
s
 
h
a
v
e
 
b
a
l
c
o
n
i
e
s
'
,
 
'
b
a
l
c
o
n
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
,
 
'
a
:
1
:
{
i
:
0
;
s
:
1
:
\
"
1
\
"
;
}
'
,
 
2
,
 
1
)
,

(
8
,
 
'
W
a
i
t
e
r
'
,
 
'
W
a
i
t
e
r
 
S
e
r
v
i
c
e
'
,
 
'
b
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
,
 
'
1
'
,
 
0
,
 
1
)
,

(
9
,
 
'
B
a
r
'
,
 
'
L
i
c
e
n
s
e
d
 
b
a
r
 
o
n
 
p
r
e
m
i
s
e
s
'
,
 
'
b
a
r
2
.
p
n
g
'
,
 
'
0
'
,
 
'
a
:
1
:
{
i
:
0
;
s
:
1
:
\
"
1
\
"
;
}
'
,
 
2
,
 
1
)
,

(
1
0
,
 
'
B
a
t
h
'
,
 
'
B
a
t
h
 
i
n
 
e
v
e
r
y
 
r
o
o
m
'
,
 
'
b
a
t
h
_
t
u
b
.
p
n
g
'
,
 
'
0
'
,
 
'
a
:
1
:
{
i
:
0
;
s
:
1
:
\
"
1
\
"
;
}
'
,
 
2
,
 
1
)
,

(
1
1
,
 
'
F
i
r
e
p
l
a
c
e
'
,
 
'
E
n
j
o
y
 
t
h
e
 
a
m
b
i
a
n
c
e
 
o
f
 
a
 
n
a
t
u
r
a
l
 
f
i
r
e
'
,
 
'
b
b
q
_
f
a
c
i
l
i
t
i
e
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
,
 
'
1
'
,
 
0
,
 
1
)
,

(
1
2
,
 
'
B
e
a
c
h
'
,
 
'
C
l
o
s
e
 
t
o
 
t
h
e
 
b
e
a
c
h
'
,
 
'
b
e
a
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
,
 
'
a
:
0
:
{
}
'
,
 
4
,
 
1
)
,

(
1
3
,
 
'
B
i
r
d
w
a
t
c
h
i
n
g
'
,
 
'
B
i
r
d
 
h
i
d
e
 
o
n
s
i
t
e
 
o
r
 
n
e
a
r
b
y
'
,
 
'
b
i
r
d
_
h
i
d
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
,
 
'
a
:
0
:
{
}
'
,
 
1
,
 
1
)
,

(
1
4
,
 
'
B
o
a
r
d
w
a
l
k
'
,
 
'
B
o
a
r
d
w
a
l
k
 
o
n
 
s
i
t
e
'
,
 
'
b
o
a
r
d
_
w
a
l
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
,
 
'
a
:
1
:
{
i
:
0
;
s
:
1
:
\
"
4
\
"
;
}
'
,
 
2
,
 
1
)
,

(
1
5
,
 
'
C
a
m
p
f
i
r
e
s
'
,
 
'
C
a
m
p
f
i
r
e
s
 
a
l
l
o
w
e
d
'
,
 
'
c
a
m
p
f
i
r
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
,
 
'
4
'
,
 
0
,
 
1
)
,

(
1
6
,
 
'
T
e
n
t
s
'
,
 
'
T
e
n
t
s
 
f
o
r
 
h
i
r
e
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
f
e
e
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
,
 
'
4
'
,
 
0
,
 
1
)
,

(
1
7
,
 
'
C
a
n
o
e
i
n
g
'
,
 
'
C
a
n
o
e
i
n
g
/
K
a
y
a
k
i
n
g
'
,
 
'
c
a
n
o
e
i
n
g
.
p
n
g
'
,
 
'
0
'
,
 
'
0
'
,
 
0
,
 
1
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
a
v
a
n
s
'
,
 
'
C
a
r
a
v
a
n
n
i
n
g
 
f
a
c
i
l
i
t
i
e
s
'
,
 
'
c
a
r
a
v
a
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
,
 
'
4
'
,
 
0
,
 
1
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
'
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
 
c
a
n
 
b
e
 
a
r
r
a
n
g
e
d
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
.
p
n
g
'
,
 
'
0
'
,
 
'
1
'
,
 
0
,
 
1
)
,

(
2
0
,
 
'
C
a
s
i
n
o
'
,
 
'
C
a
s
i
n
o
 
o
n
 
p
r
e
m
e
s
i
s
'
,
 
'
c
a
s
i
n
o
.
p
n
g
'
,
 
'
0
'
,
 
'
1
'
,
 
0
,
 
1
)
,

(
2
1
,
 
'
C
l
u
b
b
i
n
g
'
,
 
'
N
i
g
h
t
c
l
u
b
 
o
n
s
i
t
e
 
o
r
 
n
e
a
r
b
y
'
,
 
'
C
D
p
l
a
y
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
,
 
'
1
'
,
 
0
,
 
1
)
,

(
2
2
,
 
'
S
a
f
e
'
,
 
'
S
a
f
e
 
a
v
a
i
l
a
b
l
e
'
,
 
'
h
o
t
e
l
_
s
a
f
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
,
 
'
1
'
,
 
0
,
 
1
)
,

(
2
3
,
 
'
C
o
n
f
e
r
e
n
c
e
'
,
 
'
C
o
n
f
e
r
e
n
c
e
 
f
a
c
i
l
i
t
i
e
s
'
,
 
'
c
o
n
f
e
r
e
n
c
e
_
f
a
c
i
l
i
t
i
e
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
,
 
'
1
'
,
 
0
,
 
1
)
,

(
2
4
,
 
'
C
y
c
l
e
 
p
a
t
h
'
,
 
'
C
y
c
l
e
 
p
a
t
h
s
 
n
e
a
r
b
y
'
,
 
'
c
y
c
l
e
_
p
a
t
h
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
,
 
'
0
'
,
 
0
,
 
1
)
,

(
2
5
,
 
'
D
i
s
a
b
l
e
d
 
a
c
c
e
s
s
'
,
 
'
D
i
s
a
b
l
e
d
 
f
a
c
i
l
i
t
e
s
 
a
v
a
i
l
a
b
l
e
'
,
 
'
d
i
s
a
b
l
e
d
_
a
c
c
e
s
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
,
 
'
1
'
,
 
0
,
 
1
)
,

(
2
6
,
 
'
D
i
s
a
b
l
e
d
 
t
o
i
l
e
t
 
f
a
c
i
'
,
 
'
D
i
s
a
b
l
e
d
 
W
C
 
a
v
a
i
l
a
b
l
e
'
,
 
'
d
i
s
a
b
l
e
d
_
f
a
c
i
l
i
t
i
e
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
,
 
'
a
:
0
:
{
}
'
,
 
3
,
 
1
)
,

(
2
7
,
 
'
N
o
 
d
o
g
s
'
,
 
'
D
o
g
s
 
n
o
t
 
w
e
l
c
o
m
e
'
,
 
'
d
o
g
s
_
n
o
t
_
p
e
r
m
i
t
t
e
d
.
p
n
g
'
,
 
'
0
'
,
 
'
0
'
,
 
0
,
 
1
)
,

(
2
8
,
 
'
D
o
g
s
 
w
e
l
c
o
m
e
'
,
 
'
D
o
g
 
f
r
i
e
n
d
l
y
 
'
,
 
'
d
o
g
s
_
p
e
r
m
i
t
t
e
d
.
p
n
g
'
,
 
'
0
'
,
 
'
0
'
,
 
0
,
 
1
)
,

(
2
9
,
 
'
D
V
D
'
,
 
'
R
o
o
m
s
 
h
a
v
e
 
D
V
D
 
p
l
a
y
e
r
s
'
,
 
'
D
V
D
V
i
d
e
o
.
p
n
g
'
,
 
'
0
'
,
 
'
1
'
,
 
0
,
 
1
)
,

(
3
0
,
 
'
E
l
e
v
a
t
o
r
'
,
 
'
E
l
e
v
a
t
o
r
'
,
 
'
e
l
e
v
a
t
o
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
,
 
'
1
'
,
 
0
,
 
1
)
,

(
3
1
,
 
'
E
n
g
l
i
s
h
 
H
e
r
i
t
a
g
e
'
,
 
'
E
n
g
l
i
s
h
 
H
e
r
i
t
a
g
e
 
s
i
t
e
s
 
n
e
a
r
b
y
'
,
 
'
e
n
g
l
i
s
h
h
e
r
i
t
a
g
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
,
 
'
0
'
,
 
0
,
 
1
)
,

(
3
2
,
 
'
2
4
h
r
 
s
e
r
v
i
c
e
'
,
 
'
2
4
h
r
 
R
o
o
m
 
s
e
r
v
i
c
e
'
,
 
'
2
4
h
o
u
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
,
 
'
a
:
2
:
{
i
:
0
;
s
:
1
:
\
"
5
\
"
;
i
:
1
;
s
:
1
:
\
"
1
\
"
;
}
'
,
 
9
,
 
1
)
,

(
3
3
,
 
'
B
u
r
e
a
u
 
d
e
 
c
h
a
n
g
e
'
,
 
'
B
u
r
e
a
u
 
d
e
 
c
h
a
n
g
e
 
a
v
a
i
l
a
b
l
e
 
o
n
s
i
t
e
'
,
 
'
f
e
e
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
,
 
'
1
'
,
 
0
,
 
1
)
,

(
3
4
,
 
'
B
u
r
e
a
u
 
d
e
 
c
h
a
n
g
e
'
,
 
'
B
u
r
e
a
u
 
d
e
 
c
h
a
n
g
e
 
a
v
a
i
l
a
b
l
e
 
o
n
s
i
t
e
'
,
 
'
f
e
e
s
_
e
u
r
o
.
p
n
g
'
,
 
'
0
'
,
 
'
a
:
1
:
{
i
:
0
;
s
:
1
:
\
"
1
\
"
;
}
'
,
 
9
,
 
1
)
,

(
3
5
,
 
'
B
u
r
e
a
u
 
d
e
 
c
h
a
n
g
e
'
,
 
'
B
u
r
e
a
u
 
d
e
 
c
h
a
n
g
e
 
a
v
a
i
l
a
b
l
e
 
o
n
s
i
t
e
'
,
 
'
f
e
e
s
_
p
o
u
n
d
.
p
n
g
'
,
 
'
0
'
,
 
'
a
:
1
:
{
i
:
0
;
s
:
1
:
\
"
1
\
"
;
}
'
,
 
9
,
 
1
)
,

(
3
6
,
 
'
F
i
s
h
i
n
g
'
,
 
'
F
i
s
h
i
n
g
 
a
v
a
i
l
a
b
l
e
 
o
n
s
i
t
e
 
o
r
 
n
e
a
r
b
y
'
,
 
'
f
i
s
h
i
n
g
.
p
n
g
'
,
 
'
0
'
,
 
'
0
'
,
 
0
,
 
1
)
,

(
3
7
,
 
'
G
o
u
r
m
e
t
 
R
e
s
t
a
u
r
a
n
t
'
,
 
'
G
o
u
r
m
e
t
 
R
e
s
t
r
a
u
n
t
 
o
n
s
i
t
e
'
,
 
'
g
a
s
t
r
o
n
o
m
i
c
r
e
s
t
a
u
r
a
n
t
.
p
n
g
'
,
 
'
0
'
,
 
'
1
'
,
 
0
,
 
1
)
,

(
3
8
,
 
'
G
o
l
f
'
,
 
'
G
o
l
f
 
c
o
u
r
s
e
 
o
n
 
s
i
t
e
 
o
r
 
n
e
a
r
b
y
'
,
 
'
g
o
l
f
.
p
n
g
'
,
 
'
0
'
,
 
'
0
'
,
 
0
,
 
1
)
,

(
3
9
,
 
'
T
o
u
r
s
'
,
 
'
T
o
u
r
s
 
d
e
p
a
r
t
 
f
r
o
m
 
t
h
i
s
 
l
o
c
a
t
i
o
n
'
,
 
'
g
u
i
d
e
d
_
t
o
u
r
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
,
 
'
0
'
,
 
0
,
 
1
)
,

(
4
0
,
 
'
G
y
m
'
,
 
'
G
y
m
n
a
s
i
u
m
 
o
n
s
i
t
e
'
,
 
'
g
y
m
2
.
p
n
g
'
,
 
'
0
'
,
 
'
1
'
,
 
0
,
 
1
)
,

(
4
1
,
 
'
H
a
i
r
d
r
e
s
s
e
r
'
,
 
'
H
a
i
r
d
r
e
s
s
e
r
 
o
n
s
i
t
e
'
,
 
'
h
a
i
r
d
r
e
s
s
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
,
 
'
1
'
,
 
0
,
 
1
)
,

(
4
2
,
 
'
H
a
i
r
d
r
y
e
r
'
,
 
'
H
a
i
r
 
d
r
y
e
r
 
i
n
 
e
v
e
r
y
 
r
o
o
m
'
,
 
'
h
a
i
r
d
r
y
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
,
 
'
1
'
,
 
0
,
 
1
)
,

(
4
3
,
 
'
H
a
u
n
t
e
d
'
,
 
'
G
h
o
u
l
i
e
s
 
a
n
d
 
G
h
o
s
t
i
e
s
 
i
n
 
t
h
e
 
r
a
f
t
e
r
s
'
,
 
'
h
a
u
n
t
e
d
.
p
n
g
'
,
 
'
0
'
,
 
'
0
'
,
 
0
,
 
1
)
,

(
4
4
,
 
'
H
e
l
i
p
a
d
'
,
 
'
H
e
l
i
c
o
p
t
e
r
 
p
a
d
'
,
 
'
h
e
l
i
c
o
p
t
e
r
p
a
d
.
p
n
g
'
,
 
'
0
'
,
 
'
1
'
,
 
0
,
 
1
)
,

(
4
5
,
 
'
H
i
k
i
n
g
'
,
 
'
P
o
p
u
l
a
r
 
h
i
k
i
n
g
 
a
r
e
a
'
,
 
'
h
i
k
i
n
g
.
p
n
g
'
,
 
'
0
'
,
 
'
0
'
,
 
0
,
 
1
)
,

(
4
6
,
 
'
I
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
'
,
 
'
I
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
 
s
e
r
v
i
c
e
s
 
a
v
a
i
l
a
b
l
e
 
o
n
s
i
t
e
'
,
 
'
i
n
f
o
2
.
p
n
g
'
,
 
'
0
'
,
 
'
0
'
,
 
0
,
 
1
)
,

(
4
7
,
 
'
W
W
W
'
,
 
'
I
n
t
e
r
n
e
t
 
a
c
c
e
s
s
 
a
v
a
i
l
a
b
l
e
'
,
 
'
i
n
t
e
r
n
e
t
.
p
n
g
'
,
 
'
0
'
,
 
'
a
:
1
:
{
i
:
0
;
s
:
1
:
\
"
1
\
"
;
}
'
,
 
2
,
 
1
)
,

(
4
8
,
 
'
B
e
v
e
r
a
g
e
s
'
,
 
'
B
e
v
e
r
a
g
e
s
 
i
n
 
a
l
l
 
r
o
o
m
s
'
,
 
'
i
n
_
r
o
o
m
_
t
e
a
c
o
f
f
e
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
,
 
'
a
:
1
:
{
i
:
0
;
s
:
1
:
\
"
1
\
"
;
}
'
,
 
7
,
 
1
)
,

(
4
9
,
 
'
I
r
o
n
'
,
 
'
I
r
o
n
 
i
n
 
e
v
e
r
y
 
r
o
o
m
'
,
 
'
i
r
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
,
 
'
1
'
,
 
0
,
 
1
)
,

(
5
0
,
 
'
J
a
c
u
z
z
i
'
,
 
'
J
a
c
u
z
z
i
 
o
n
s
i
t
e
'
,
 
'
j
a
c
u
z
z
i
.
p
n
g
'
,
 
'
0
'
,
 
'
1
'
,
 
0
,
 
1
)
,

(
5
1
,
 
'
N
a
t
i
o
n
a
l
 
T
r
u
s
t
'
,
 
'
N
a
t
i
o
n
a
l
 
T
r
u
s
t
'
,
 
'
n
a
t
i
o
n
a
l
t
r
u
s
t
.
p
n
g
'
,
 
'
0
'
,
 
'
0
'
,
 
0
,
 
1
)
,

(
5
2
,
 
'
N
o
 
s
m
o
k
i
n
g
'
,
 
'
S
m
o
k
e
 
f
r
e
e
 
e
s
t
a
b
l
i
s
h
m
e
n
t
'
,
 
'
n
o
_
s
m
o
k
i
n
g
.
p
n
g
'
,
 
'
0
'
,
 
'
0
'
,
 
0
,
 
1
)
,

(
5
3
,
 
'
O
w
n
e
r
 
m
a
n
a
g
e
d
'
,
 
'
O
w
n
e
r
 
m
a
n
a
g
e
d
 
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
O
w
n
e
r
m
a
n
a
g
e
d
.
p
n
g
'
,
 
'
0
'
,
 
'
0
'
,
 
0
,
 
1
)
,

(
5
4
,
 
'
P
a
r
k
i
n
g
'
,
 
'
P
a
r
k
i
n
g
 
a
v
a
i
l
a
b
l
e
'
,
 
'
p
a
r
k
i
n
g
.
p
n
g
'
,
 
'
0
'
,
 
'
a
:
1
:
{
i
:
0
;
s
:
1
:
\
"
1
\
"
;
}
'
,
 
8
,
 
1
)
,

(
5
5
,
 
'
P
e
t
s
 
w
e
l
c
o
m
e
'
,
 
'
P
e
t
 
f
r
i
e
n
d
l
y
'
,
 
'
p
e
t
s
_
w
e
l
c
o
m
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
,
 
'
0
'
,
 
0
,
 
1
)
,

(
5
6
,
 
'
P
i
c
n
i
c
 
a
r
e
a
'
,
 
'
P
i
c
n
i
c
e
r
s
 
w
e
l
c
o
m
e
'
,
 
'
p
i
c
n
i
c
_
a
r
e
a
.
p
n
g
'
,
 
'
0
'
,
 
'
0
'
,
 
0
,
 
1
)
,

(
5
7
,
 
'
P
l
a
y
 
a
r
e
a
'
,
 
'
C
h
i
l
d
r
e
n
\
'
s
 
p
l
a
y
 
a
r
e
a
 
o
n
s
i
t
e
'
,
 
'
p
l
a
y
_
a
r
e
a
.
p
n
g
'
,
 
'
0
'
,
 
'
0
'
,
 
0
,
 
1
)
,

(
5
8
,
 
'
P
o
o
l
'
,
 
'
S
w
i
m
i
n
g
'
,
 
'
p
o
o
l
.
p
n
g
'
,
 
'
0
'
,
 
'
0
'
,
 
0
,
 
1
)
,

(
5
9
,
 
'
Q
u
i
e
t
/
R
u
r
a
l
 
'
,
 
'
P
r
o
p
e
r
t
y
 
i
s
 
i
n
 
a
 
q
u
i
e
t
 
a
n
d
/
o
r
 
r
u
r
a
l
 
l
o
c
a
t
i
o
n
'
,
 
'
q
u
i
e
t
l
o
c
a
t
i
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
,
 
'
0
'
,
 
0
,
 
1
)
,

(
6
0
,
 
'
R
a
n
g
e
r
'
,
 
'
R
a
n
g
e
r
 
s
t
a
t
i
o
n
 
h
e
r
e
'
,
 
'
r
a
n
g
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
,
 
'
0
'
,
 
0
,
 
1
)
,

(
6
1
,
 
'
R
e
s
t
a
u
r
a
n
t
'
,
 
'
R
e
s
t
r
a
u
n
t
 
o
n
s
i
t
e
'
,
 
'
r
e
s
t
r
a
u
n
t
2
.
p
n
g
'
,
 
'
0
'
,
 
'
1
'
,
 
0
,
 
1
)
,

(
6
2
,
 
'
P
o
n
y
 
T
r
e
k
k
i
n
g
'
,
 
'
P
o
n
y
 
t
r
e
k
k
i
n
g
 
o
n
s
i
t
e
 
o
r
 
n
e
a
r
b
y
'
,
 
'
r
i
d
i
n
g
.
p
n
g
'
,
 
'
0
'
,
 
'
0
'
,
 
0
,
 
1
)
,

(
6
3
,
 
'
T
e
l
e
p
h
o
n
e
'
,
 
'
T
e
l
e
p
h
o
n
e
 
i
n
 
e
v
e
r
y
 
r
o
o
m
'
,
 
'
r
o
o
m
_
t
e
l
e
p
h
o
n
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
,
 
'
1
'
,
 
0
,
 
1
)
,

(
6
4
,
 
'
W
a
t
e
r
 
s
p
o
r
t
s
'
,
 
'
W
a
t
e
r
 
s
p
o
r
t
 
f
a
c
i
l
i
t
i
e
s
 
o
n
s
i
t
e
 
o
r
 
n
e
a
r
b
y
'
,
 
'
s
a
i
l
i
n
g
.
p
n
g
'
,
 
'
0
'
,
 
'
0
'
,
 
0
,
 
1
)
,

(
6
5
,
 
'
S
c
u
b
a
'
,
 
'
S
c
u
b
a
 
d
i
v
i
n
g
 
a
r
r
a
n
g
e
d
'
,
 
'
s
c
u
b
a
.
p
n
g
'
,
 
'
0
'
,
 
'
0
'
,
 
0
,
 
1
)
,

(
6
6
,
 
'
S
c
e
n
i
c
 
v
i
e
w
s
'
,
 
'
S
c
e
n
i
c
 
v
i
e
w
s
 
'
,
 
'
s
c
e
n
i
c
v
i
e
w
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
,
 
'
0
'
,
 
0
,
 
1
)
,

(
6
7
,
 
'
S
h
o
w
e
r
s
'
,
 
'
s
h
o
w
e
r
s
 
i
n
 
e
v
e
r
y
 
r
o
o
m
'
,
 
'
s
h
o
w
e
r
_
o
n
l
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
,
 
'
1
'
,
 
0
,
 
1
)
,

(
6
8
,
 
'
S
h
u
t
t
l
e
'
,
 
'
S
h
u
t
t
l
e
 
s
e
r
v
i
c
e
 
t
o
 
a
i
r
p
o
r
t
 
a
n
d
 
n
i
g
h
t
c
l
u
b
 
d
i
s
t
r
i
c
t
 
a
v
a
i
l
a
b
l
e
'
,
 
'
s
h
u
t
t
l
e
_
s
e
r
v
i
c
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
,
 
'
1
'
,
 
0
,
 
1
)
,

(
6
9
,
 
'
W
i
n
t
e
r
 
S
p
o
r
t
s
'
,
 
'
W
i
n
t
e
r
 
S
p
o
r
t
s
 
f
a
c
i
l
i
t
i
e
s
 
a
v
a
i
l
a
b
l
e
'
,
 
'
S
k
i
o
n
s
i
t
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
,
 
'
1
'
,
 
0
,
 
1
)
,

(
7
0
,
 
'
S
m
o
k
i
n
g
'
,
 
'
S
m
o
k
e
r
s
 
w
e
l
c
o
m
e
'
,
 
'
s
m
o
k
e
r
s
_
w
e
l
c
o
m
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
,
 
'
0
'
,
 
0
,
 
1
)
,

(
7
1
,
 
'
S
n
o
r
k
e
l
l
i
n
g
'
,
 
'
S
n
o
r
k
e
l
l
i
n
g
 
s
u
i
t
a
b
l
e
 
h
e
r
e
'
,
 
'
s
n
o
r
k
e
l
l
i
n
g
.
p
n
g
'
,
 
'
0
'
,
 
'
0
'
,
 
0
,
 
1
)
,

(
7
2
,
 
'
S
u
n
b
e
d
'
,
 
'
S
u
n
b
e
d
 
o
n
s
i
t
e
'
,
 
'
s
u
n
b
e
d
.
p
n
g
'
,
 
'
0
'
,
 
'
1
'
,
 
0
,
 
1
)
,

(
7
3
,
 
'
T
e
n
n
i
s
 
c
o
u
r
t
s
'
,
 
'
T
e
n
n
i
s
 
c
o
u
r
t
 
o
n
s
i
t
e
 
o
r
 
n
e
a
r
b
y
'
,
 
'
t
e
n
n
i
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
,
 
'
0
'
,
 
0
,
 
1
)
,

(
7
4
,
 
'
T
e
l
e
v
i
s
i
o
n
'
,
 
'
T
e
l
e
v
i
s
i
o
n
 
i
n
 
e
v
e
r
y
 
r
o
o
m
'
,
 
'
t
v
_
i
n
_
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
,
 
'
1
'
,
 
0
,
 
1
)
,

(
7
5
,
 
'
W
e
d
d
i
n
g
s
'
,
 
'
W
e
d
d
i
n
g
s
 
c
a
t
e
r
e
d
 
f
o
r
'
,
 
'
w
e
d
d
i
n
g
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
,
 
'
1
'
,
 
0
,
 
1
)
,

(
7
6
,
 
'
W
h
a
l
e
s
'
,
 
'
W
h
a
l
e
 
w
a
t
c
h
i
n
g
'
,
 
'
w
h
a
l
e
w
a
t
c
h
i
n
g
.
p
n
g
'
,
 
'
0
'
,
 
'
0
'
,
 
0
,
 
1
)
,

(
7
7
,
 
'
W
i
f
i
'
,
 
'
W
i
f
i
 
a
v
a
i
l
a
b
l
e
'
,
 
'
w
i
f
i
.
p
n
g
'
,
 
'
0
'
,
 
'
a
:
1
:
{
i
:
0
;
s
:
1
:
\
"
1
\
"
;
}
'
,
 
5
,
 
1
)
,

(
7
8
,
 
'
C
h
r
i
s
t
m
a
s
'
,
 
'
C
h
r
i
s
t
m
a
s
 
p
a
r
t
i
e
s
 
c
a
t
e
r
e
d
 
f
o
r
'
,
 
'
x
m
a
s
_
p
a
r
t
y
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
,
 
'
1
'
,
 
0
,
 
1
)
,

(
7
9
,
 
'
Z
o
d
i
a
c
 
E
x
c
u
r
s
i
o
n
s
'
,
 
'
Z
o
d
i
a
c
 
e
x
c
u
r
s
i
o
n
s
 
c
a
n
 
b
e
 
a
r
r
a
n
g
e
d
 
f
r
o
m
 
t
h
e
s
e
 
p
r
e
m
e
s
i
s
'
,
 
'
z
o
d
i
a
c
e
x
c
u
r
s
i
o
n
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
,
 
'
0
'
,
 
0
,
 
1
)
,

(
8
0
,
 
'
P
r
i
v
a
t
e
 
G
a
r
d
e
n
'
,
 
'
P
r
i
v
a
t
e
 
g
a
r
d
e
n
 
f
o
r
 
y
o
u
r
 
e
n
j
o
y
m
e
n
t
'
,
 
'
g
a
r
d
e
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
,
 
'
0
'
,
 
0
,
 
1
)
,

(
8
1
,
 
'
M
i
c
r
o
w
a
v
e
'
,
 
'
P
r
o
p
e
r
t
y
 
h
a
s
 
a
 
m
i
c
r
o
w
a
v
e
 
t
h
a
t
 
c
a
n
 
b
e
 
u
s
e
d
 
b
y
 
t
h
e
 
r
e
s
i
d
e
n
t
s
'
,
 
'
m
i
c
r
o
w
a
v
e
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
,
 
'
1
'
,
 
0
,
 
1
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
h
o
t
e
l
_
f
e
a
t
u
r
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

